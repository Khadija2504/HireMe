<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response(['message' => 'Invalid credentials'], 401);
        }
        if (Auth::check()) {
            session(['user_id' => Auth::id()]);
        }
        $user_id = session('user_id');
        // dd($user_id);
        $user = $request->user();
        return redirect()->route('home');
    }
    public function create(){
        return view('sign');
    }
    public function store(Request $request)
{
    // dd($request);
    $request->validate([
        'Nom' => 'required|string|max:255',
        'Prenom' => 'required|string|max:255',
        'Phone' => 'required|numeric|digits:10',
        'age' => 'required|numeric|max:99',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:4',
    ]);

    $user = User::create([
        'Nom' => $request->input('Nom'),
        'Prenom' => $request->input('Prenom'),
        'Phone' => $request->input('Phone'),
        'age' => $request->input('age'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
    ]);
    return redirect()->route('create');
}
public function index(){
    
    $user_id = session('user_id');
    $categories = Categorie::all();
    // dd($user_id);
    return view('home',compact('categories'));
}
public function contact(){
    $categories = Categorie::all();
    return view('contact',compact('categories'));
}
public function location(){
    $categories = Categorie::all();
    return view('locations',compact('categories'));
}
public function news(){
    $categories = Categorie::all();
    return view('news',compact('categories'));
}
public function profile(){
    $categories = Categorie::all();
    return view('profile',compact('categories'));
}
public function team(){
    $categories = Categorie::all();
    return view('team',compact('categories'));
}

public function modifyProfile(){
    $userId = session('user_id');
    // dd($userId);
    $users = User::where('id', $userId)->get();
    $user = User::find($userId);
    // dd($user);
    $services = Service::where('user_id', $userId)->with('user', 'category')->get();
    $categories = Categorie::all();
    return view('profile',compact('users','user','services','categories'));
}
public function updateProfile(Request $request)
{   
    $userId = session('user_id');
    $user = User::find($userId);

    if (!$user) {
        return abort(404);
    }

    $userData = $request->input('user', []);

    $user->Nom = $userData['Nom'] ?? $request->input('Nom');
    $user->Prenom = $userData['Prenom'] ?? $request->input('Prenom');
    $user->Phone = $userData['Phone'] ?? $request->input('Phone');
    $user->age = $userData['age'] ?? $request->input('age');
    $user->email = $userData['email'] ?? $request->input('email');
    $user->password = $userData['password'] ?? $request->input('password');

    $user->save();
    $user->update($userData);
    // dd($userData);

    return redirect()->back();
}


}

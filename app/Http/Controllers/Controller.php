<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response(['user' => $user, 'message' => 'Registration successful'], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response(['message' => 'Invalid credentials'], 401);
        }

        $user = $request->user();
        return redirect()->route('home');
        // return response(['user' => $user, 'message' => 'Login successful'], 200);
    }
    public function create(){
        return view('sign');
    }
    public function store(Request $request)
{
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
    return redirect()->route('home');
    // return response(['user' => $user, 'message' => 'Sigup successful'], 200);
}
public function index(){
    // dd(user::all());
    return view('home');
}
public function contact(){
    return view('contact');
}
public function location(){
    return view('locations');
}
public function news(){
    return view('news');
}
public function profile(){
    return view('profile');
}
public function team(){
    return view('team');
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//     public function login(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|string|email',
//             'password' => 'required|string|min:8',
//         ]);

//         if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//             return response(['message' => 'Invalid credentials'], 401);
//         }
//         if (Auth::check()) {
//             session(['user_id' => Auth::id()]);
//         }
//         $user_id = session('user_id');
//         // dd($user_id);
//         $user = $request->user();
//         return redirect()->route('home');
//     }
//     public function create(){
//         return view('sign');
//     }
//     public function store(Request $request)
// {
//     // dd($request);
//     $request->validate([
//         'Nom' => 'required|string|max:255',
//         'Prenom' => 'required|string|max:255',
//         'Phone' => 'required|numeric|digits:10',
//         'age' => 'required|numeric|max:99',
//         'email' => 'required|email|unique:users',
//         'password' => 'required|string|min:4',
//     ]);

//     $user = User::create([
//         'Nom' => $request->input('Nom'),
//         'Prenom' => $request->input('Prenom'),
//         'Phone' => $request->input('Phone'),
//         'age' => $request->input('age'),
//         'email' => $request->input('email'),
//         'password' => Hash::make($request->input('password')),
//     ]);
//     return redirect()->route('create');
// }
// public function index(){
    
//     $user_id = session('user_id');
//     $categories = Categorie::all();
//     // dd($user_id);
//     return view('home',compact('categories'));
// }
// public function contact(){
//     $categories = Categorie::all();
//     return view('contact',compact('categories'));
// }
// public function location(){
//     $categories = Categorie::all();
//     return view('locations',compact('categories'));
// }
// public function news(){
//     $categories = Categorie::all();
//     return view('news',compact('categories'));
// }
// public function profile(){
//     $categories = Categorie::all();
//     return view('profile',compact('categories'));
// }
// public function team(){
//     $categories = Categorie::all();
//     return view('team',compact('categories'));
// }

}

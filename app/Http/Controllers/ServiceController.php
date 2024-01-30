<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;



class ServiceController extends Controller
{
    public function service(Request $request){
        $services = Service::with('user','category')->get();

    return view('services', compact('services'));
    }
    public function store(Request $request)
{
    $request->validate([
        'titre' => 'required|string|max:55',
        'description' => 'required|string|max:555',
    ]);

    $user = User::create([
        'titre' => $request->input('titre'),
        'description' => $request->input('description'),
        'category_id' => $request->input('category_id'),
        'user_id' => $request->input('user_id'),
    ]);
    return redirect()->route('home');
    // return response(['user' => $user, 'message' => 'Sigup successful'], 200);
}
}

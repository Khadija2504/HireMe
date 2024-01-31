<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function service(Request $request){
        $services = Service::with('user','category')->get();
        $categories = Categorie::all();

    return view('services', compact('services','categories'));
    }
    public function addService(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|exists:categories,id',
        ]);

        $user_id = Auth::user();

        Service::create([
            'titre' => $request->input('title'),
            'description' => $request->input('content'),
            'category_id' => $request->input('category'),
            'user_id' => $user_id,
        ]);

        // $user->services()->save($service);

        return redirect()->back()->with('success', 'Service added successfully.');
    }
}

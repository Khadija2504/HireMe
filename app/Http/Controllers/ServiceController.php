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
        $userId = session('user_id');
        $services = Service::where('user_id', $userId)->with('user', 'category')->get();
        $categories = Categorie::all();
    return view('services', compact('services','categories'));
    }

    public function myService(Request $request){
        $userId = session('user_id');
        $services = Service::where('user_id', $userId)->with('user', 'category')->get();
        $categories = Categorie::all();
    return view('myService', compact('services','categories'));
    }
    public function modify($id){
        $service = Service::find($id);
        $userId = session('user_id');
        $services = Service::where('user_id', $userId)->with('user', 'category')->get();
        $categories = Categorie::all();
        $categorie = Categorie::find($id);
        return view('modifyService',compact('service','services','categories','categorie'));
    }
    public function update(Request $request,int $id)
{
    // Validate the request data
    $formFields = $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'category_id' => 'required|exists:categories,category_id',
    ]);

    $service = Service::find($id);
    $service->titre = $formFields['titre'];
    $service->description = $formFields['description'];
    $service->category_id = $formFields['category_id'];
    $service->save();

    return redirect()->route('myService');
}

    // public function store(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'titre' => 'required|string|max:255',
    //         'description' => 'required|string:1000',
    //         'category_id' => 'required|exists:categories,category_id',
    //     ]);
    
    //     // $user = Auth::user();
    //     $service = new Service([
    //         'titre' => $request->input('titre'),
    //         'description' => $request->input('description'),
    //         'category_id' => $request->input('category_id'),
    //     ]);
    //     // $user->services()->save($service);
    
    //     return redirect()->route('home');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,category_id',
        ]);
        // dd($data);

        // $user = Auth::user();
        $user = new User();
        $service = new Service([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        $user->service()->save($service);
        return redirect()->route('home');

    }
    public function destroy(Request $request){
        $service = Service::find($request->id);
        $service->delete();
        return redirect()->route('home');
    }
}
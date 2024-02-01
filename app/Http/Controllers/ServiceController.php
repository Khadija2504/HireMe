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
        // $userId = session('user_id');
        $services = Service::with('user', 'category')->get();
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
    
        $titre = request()->titre;
        $categories = request()->categories;
        $description = request()->description;
        $user = session('user_id');

        $service = Service::find($id);
        $service->titre = $titre;
        $service->category_id = $categories;
        $service->description = $description;
        $service->user_id = $user;
        $service->save();
        return redirect()->route('myService');
}

    public function store(Request $request)
    {
    $titre = request()->titre;
    $categories = request()->categories;
    $description = request()->description;
    $user = session('user_id');
        // $user = Auth::user();
        $service = new Service;
        $service->titre = $titre;
        $service->category_id = $categories;
        $service->description = $description;
        $service->user_id = $user;
        $service->save();
        return redirect()->back();
    }
    
    public function destroy(Request $request){
        $service = Service::find($request->id);
        $service->delete();
        return redirect()->route('home');
    }
}
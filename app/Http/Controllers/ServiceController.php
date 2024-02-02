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
        $services = Service::with('user', 'categorie')
            ->orderBy('updated_at', 'desc')->get();
        $categories = Categorie::all();
        // dd(($services));
    return view('services', compact('services','categories'));
    }

    public function myService(Request $request){
        $userId = session('user_id');
        $services = Service::where('user_id', $userId)->with('categorie','user')
            ->orderBy('updated_at', 'desc')->get();
        $categories = Categorie::all();
        // dd($services->services);
    return view('myService', compact('services','categories'));
    }
    public function modify($id){
        $userId = session('user_id');
        $service = Service::with('user', 'categorie')->find($id);
        $services = Service::where('user_id', $userId)->with('user', 'categorie')
            ->orderBy('created_at', 'desc')->get();
        $categories = Categorie::all();
        $categorie = Categorie::find($id);
        return view('modifyService', compact('services', 'categories', 'categorie', 'service'));
    }
    
    public function update(Request $request, $id)
{
    $userId = session('user_id');
    $service = Service::where('user_id', $userId)->find($id);

    if (!$service) {
        return abort(404);
    }

    $serviceData = $request->input('service', []);

    $service->titre = $serviceData['titre'] ?? $request->input('titre');
    $service->description = $serviceData['description'] ?? $request->input('description');
    $service->price = $serviceData['price'] ?? $request->input('price');
    $service->category_id = $serviceData['category_id'] ?? $request->select('category_id');
    
    $service->save();
    // dd($serviceData['category_id']);

    return redirect()->route('myService');
}

    
    public function store(Request $request)
    {
    $titre = request()->titre;
    $categories = request()->categories;
    $description = request()->description;
    $price = request()->price;
    $user = session('user_id');
        // $user = Auth::user();
        $service = new Service;
        $service->titre = $titre;
        $service->category_id = $categories;
        $service->description = $description;
        $service->price = $price;
        $service->user_id = $user;
        $service->save();
        return redirect()->back();
    }
    
    public function destroy(Request $request){
        $service = Service::find($request->id);
        $service->delete();
        return redirect()->back();
    }
}
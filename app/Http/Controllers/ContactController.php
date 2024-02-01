<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;

class ContactController extends Controller
{
    public function contact($id){
        // $services = Service::with('user', 'category')->get();
        $categories = Categorie::all();
        $service = Service::find($id);
        $userId = session('user_id');
        $categorie = Categorie::find($id);
        $service_id = $id;
        $contact = Contact::all();
        // dd($contact);
        return view('contact',compact('service','categories','categorie','contact'));
    }
    public function addMsg(Request $request, $id){
        $service = Service::find($id);
        $categories = Categorie::all();
        // $userId = session('user_id');
        return view('addMsg',compact('categories','service','id'));
    }
    public function storeMsg(Request $request){
        $service_id = request()->service_id;
        $message = request()->message;
        $user = session('user_id');
        $service = Service::find($service_id);
        $contact = new Contact;
        $contact->message = $message;
        $contact->user_id = $user;
        $contact->service_id = $service_id;
        $categories = Categorie::all();
        $contact->save();
    
        return redirect()->route('contact', ['id' => $service_id])
                     ->with(compact('service', 'categories'));
    }
}
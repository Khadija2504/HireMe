<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;

class ContactController extends Controller
{
    public function contact($id) {
        $userId = session('user_id');
        if(!isset($userId)){
            return redirect()->route('create');
        }
        $service = Service::with('user', 'categorie')->find($id);
        $categories = Categorie::all();
        $contact = Contact::where('service_id', $id)
            ->orderBy('created_at', 'desc')->get();
    
        return view('contact', compact('service', 'categories', 'contact'));
    }
    public function addMsg(Request $request, $id){
        $userId = session('user_id');
        if(!isset($userId)){
            return redirect()->route('create');
        }
        $service = Service::find($id);
        $categories = Categorie::all();
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
<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function service(Request $request){
        $categories = Categorie::all();
        // dd($categories);
    return view('home', compact('categories'));
    }
}
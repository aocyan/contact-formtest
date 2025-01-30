<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function confirm(Request $request)
    {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender', 
            'email', 
            'tel_first',
            'tel_second',
            'tel_third',
            'address',
            'building',
            'content', 
        ]);
        
        return view('confirm', compact('contact'));       
    }

    public function store(Request $request)
    {


	    $contact = $request->only([
            'last_name',
            'first_name',
            'gender', 
            'email', 
            'tel',
            'address',
            'building',
            'detail',
        ]);
    }
}

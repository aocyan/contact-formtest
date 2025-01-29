<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

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
            'kinds', 
            'content'
        ]);

        return view('confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function admin()
    {
        return view('admin');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
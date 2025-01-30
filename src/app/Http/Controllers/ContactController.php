<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
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
            'detail', 
            'content'
        ]);

         $tel = $request->tel_first . $request->tel_second . $request->tel_third;

        return view('confirm', compact('contact','tel'));       
    }

    public function store(ContactRequest $request)
    {
        if($request->input('fix') == 'fix'){
            return redirect('/')
                        ->withInput();
        }

	    $contact = $request->only([
            'last_name',
            'first_name',
            'gender', 
            'email', 
            'tel',
            'address',
            'building',
            'detail', 
            'content'
        ]);
        
        Contact::create($contact);

        return view('thanks');
    }   

    public function admin()
    {
		$contacts = Contact::paginate(1);

        return view('admin', compact('contacts'));

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
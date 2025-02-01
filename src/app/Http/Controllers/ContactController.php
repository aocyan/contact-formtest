<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'content', 
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

        $category = Category::create([
            'detail' => $request->input('detail')
        ]);

	    $contact = $request->only([
            'category_id',
            'last_name',
            'first_name',
            'gender', 
            'email', 
            'tel',
            'address',
            'building',
            'content',
        ]);

        $contact['category_id'] = $category->id;

        Contact::create($contact);

        return view('thanks');
    }   

    public function admin()
    {
		$contacts = Contact::with('category')->paginate(7);

        return view('admin', compact('contacts'));

	}

       public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function search(Request $request)
    {
        $gender = $request->input('gender');

         $contacts = Contact::where('gender', 'LIKE',"%{$gender}%")->paginate(7);

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
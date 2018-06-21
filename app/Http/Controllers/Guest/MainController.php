<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Validator;

use App\Mail\ContactMail;
use App\Models\Category;
use App\User;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderImages = Storage::files('public/slider');
        $welcomeImage = Storage::files('public/welcome');
        $contactImage = Storage::files('public/contact');

        return view ('guest.index', compact('sliderImages', 'welcomeImage', 'contactImage'));
    }

    /**
     * Display dishes menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $categories = Category::all()->sortBy('name');

        return view ('guest.menu', compact('categories'));
    }

    /**
     * Display dishes menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $images = Storage::files('public/gallery');

        return view ('guest.gallery', compact('images'));
    }

    public function contact(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'message' => 'required|max:1000'
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $mail = Mail::to(User::first())->send(new ContactMail($request));
        session()->flash('success', 'Mensaje enviado exitosamente.');
        
        return redirect( route('guest.index') );
    }
}

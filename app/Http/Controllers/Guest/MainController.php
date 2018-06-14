<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;

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
}

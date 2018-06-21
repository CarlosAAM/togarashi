<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;
use App\Models\Category;
use App\Helper;
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
        $sliderImages = Helper::transformCollectionContent(collect(Storage::cloud()->listContents('/14kN0_wcc4QZ6le8PDxUB82qXkFiyUQrN', false)));
        $welcomeImage = Helper::transformCollectionContent(collect(Storage::cloud()->listContents('/1CV1f7W6HIPnontPk4OQ2vBba6xGq7PD3', false)));
        $contactImage = Helper::transformCollectionContent(collect(Storage::cloud()->listContents('/1hyzts6grL4aO7Lq4AUP3h1JYxOdsK9zD', false)));

        return view ('guest.index', compact('sliderImages', 'welcomeImage', 'contactImage'));
    }

    /**
     * Display dishes menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $image = (object) collect(Storage::cloud()->listContents('/1E48CXgeV4ceDHK62VkcFPtahawGe5ZlV', false))->first();
        $categories = Category::all()->sortBy('name');

        return view ('guest.menu', compact('categories', 'image'));
    }

    /**
     * Display dishes menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $image = (object) collect(Storage::cloud()->listContents('/11Re1rTQMp2q_UjFM9JOhlwoj0UHVrW4n', false))->first();
        $images = Helper::transformCollectionContent(collect(Storage::cloud()->listContents('/1N4yctiUbrDEaoRKKZh0SXb2ur4h2KnMw', false)));

        return view ('guest.gallery', compact('images', 'image'));
    }

    public function contact(Request $request){
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|e-mail',
            'phone' => 'required|integer',
            'message' => 'required|max:1000'
        ]);

        $mail = Mail::to(User::first())->send(new ContactMail($request));
        
        return $mail;
    }
}

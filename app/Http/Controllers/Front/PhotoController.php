<?php

namespace App\Http\Controllers\Front;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index()
    {
        $photo_all = Photo::paginate(4);
        return view('front.photo_gallery',compact('photo_all'));
    }
}

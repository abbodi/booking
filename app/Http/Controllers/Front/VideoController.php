<?php

namespace App\Http\Controllers\Front;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $video_all = Video::paginate(4);
        return view('front.video_gallery',compact('video_all'));
    }
}

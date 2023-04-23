<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Room;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slide_all = Slider::get();
        $feature_all = Feature::get();
        $testimonial_all = Testimonial::get();
        $post_all = Post::orderBy('id','desc')->limit(3)->get();
        $room_all = Room::get();

        return view('front.home', compact('slide_all','feature_all','testimonial_all','post_all','room_all'));
    }
}

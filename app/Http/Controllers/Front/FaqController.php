<?php

namespace App\Http\Controllers\Front;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index(){
        $faq_all = Faq::get();
        return view('front.faq',compact('faq_all'));
    }

}

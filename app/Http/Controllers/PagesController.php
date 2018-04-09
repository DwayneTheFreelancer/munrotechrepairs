<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
//use App\mail\sendMail;
use SendMail;


class PagesController extends Controller
{
    public function index() {
        return view('pages/index');
    }

    public function aboutUs() {
        return view('pages/about-us');
    }

    public function send(Request $request) {
        // Mail is the fascade and sendMail a class that calls all the request from the class
        if($request->name == "" || $request->email == "" || $request->comment == "") {
            echo "Please fill in all fields";
        } else {
            Mail::send(new SendMail());
            echo "You message hase been sent";
        }
    }

    public function contact() {
        return view('pages/contact');
    }

    public function story() {
        return view('pages/story');
    }

    public function blog() {
        return view('pages/blog');
    }

    public function faq() {
        return view('pages/faq');
    }
}

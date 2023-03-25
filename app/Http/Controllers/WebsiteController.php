<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(){
        return view('website.home.index');
    }
    public function about(){
        return view('website.about.index');
    }
    public function contact(){
        return view('website.contact.index');
    }
    public function trainingCategory(){
        return view('website.training-category.index');
    }
    public function allTraining(){
        return view('website.all-training.index');
    }
    public function auth(){
        return view('website.login-registration.index');
    }
}

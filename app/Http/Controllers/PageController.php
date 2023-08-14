<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function get_about(){
        return view('pages.about');
    }

    public function get_blog(){
        return view('pages.blog');
    }

    public function get_contact(){
        return view('pages.contact');
    }

    public function get_services(){
        return view('pages.services');
    }

    public function get_single_block(){
        return view('pages.single_block');
    }

    public function get_works_details(){
        return view('pages.works_details');
    }

    public function get_works(){
        return view('pages.works');
    }
}

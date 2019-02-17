<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to Laravel!';
        return view('Pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Us';
        return view('Pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=>'services',
            'services'=>['laravel','vue Js','wordpress']
        );
        return view('Pages.services')->with($data);
    }
}

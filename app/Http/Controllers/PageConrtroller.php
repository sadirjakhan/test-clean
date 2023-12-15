<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageConrtroller extends Controller
{
    public function main()
    {
        // dd(App::currentLocale());   
        return view('main');
    }

    public function about()
    {
        return view('about');
    }

    
    public function service()
    {
        return view('service');
    }

    
    public function project()
    {
        return view('project');
        dd('error');
    }

    
    public function pages()
    {
        return view('pages');
    }
 

    
    public function contact()
    {
        return view('contact');
    }

 

    public function single()
    {
        return view('single');
    }
}

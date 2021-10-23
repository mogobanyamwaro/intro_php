<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PagesController;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $title = 'welcome to Homepage';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'welcome to About page';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title'=>'Services page with array',
            'services'=>['web design','programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}

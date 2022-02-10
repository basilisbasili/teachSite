<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subjact;

class MainController extends Controller
{
    public function index($category=null){
        $Ndate=Category::get();
        $Subjact=Subjact::get();
        return view('home',compact('Ndate','Subjact'));
    }
    public function indexSub($category=null){
        $Ndate=Category::get();
        $Subjact=Subjact::get();
        return view('home',compact('Ndate','Subjact' ));;
    }
    public function about(){
        return view('about');
    }
    public function document($category=null){
        $Ndate=Category::where('code',$category)->first();
        dd($Ndate);
        return view('document',compact('category'));
    }
}

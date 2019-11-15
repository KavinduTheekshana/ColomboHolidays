<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomaPageController extends Controller
{
    public function index()
    {
        $titleIdentity="Home";
        $activeStatusHome="active";
        $activeStatusContactUs="";
        $activeStatusGallary="";
        $activeStatusAboutUs="";
        $activeStatusNews="";

        $testimonials = DB::table('testimonials')->where('status','1')->get();


        return view('welcome',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews,
         'testimonials'=>$testimonials]);
    }
}

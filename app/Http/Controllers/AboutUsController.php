<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{
   public function index()
    {
        $titleIdentity="About Us";
        $activeStatusHome="";
        $activeStatusContactUs="";
        $activeStatusGallary="";
        $activeStatusAboutUs="active";
        $activeStatusNews="";

        $testimonials = DB::table('testimonials')->where('status','1')->get();


        return view('aboutus',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews,
        'testimonials'=>$testimonials]);
    }
}

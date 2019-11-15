<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('aboutus',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews]);
    }
}

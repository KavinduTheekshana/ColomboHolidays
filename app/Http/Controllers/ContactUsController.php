<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
   public function index()
    {
        $titleIdentity="Contact Us";
        $activeStatusHome="";
        $activeStatusContactUs="active";
        $activeStatusGallary="";
        $activeStatusAboutUs="";
        $activeStatusNews="";
        return view('contact',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
      public function index()
    {
        $titleIdentity="FAQ";
        $activeStatusHome="";
        $activeStatusContactUs="";
        $activeStatusGallary="";
        $activeStatusAboutUs="";
        $activeStatusNews="";
        return view('faq',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews]);
    }
}

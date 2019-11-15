<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
      public function index()
    {
        $titleIdentity="Privacy Policy";
        $activeStatusHome="";
        $activeStatusContactUs="";
        $activeStatusGallary="";
        $activeStatusAboutUs="";
        $activeStatusNews="";
        return view('privacypolicy',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews]);
    }
}

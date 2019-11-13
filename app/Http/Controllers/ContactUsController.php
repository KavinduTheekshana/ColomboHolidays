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
        return view('contact',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs]);
    }
}

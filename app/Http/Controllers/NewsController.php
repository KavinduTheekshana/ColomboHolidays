<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
      public function index()
    {
        $titleIdentity="News";
        $activeStatusHome="";
        $activeStatusContactUs="";
        $activeStatusGallary="";
        $activeStatusAboutUs="";
        $activeStatusNews="active";
        return view('news',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews]);
    }
}

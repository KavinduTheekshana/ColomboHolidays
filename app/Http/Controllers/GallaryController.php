<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        $titleIdentity="Gallary";
        $activeStatusHome="";
        $activeStatusContactUs="";
        $activeStatusGallary="active";
        $activeStatusAboutUs="";
        $activeStatusNews="";
        return view('gallary',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews]);
    }
}

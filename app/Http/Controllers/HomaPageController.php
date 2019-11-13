<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomaPageController extends Controller
{
    public function index()
    {
        $titleIdentity="Home";
        $activeStatusHome="active";
        $activeStatusContactUs="";
        return view('welcome',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs]);
    }
}

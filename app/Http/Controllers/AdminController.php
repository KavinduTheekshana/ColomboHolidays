<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $titleIdentity="Admin Dashboard";
        return view('admin.dashboard',['titleIdentity'=>$titleIdentity]);
    }

     public function BeautifulTrips()
    {
        $titleIdentity="Beautiful Trips";
        return view('admin.BeautifulTrips',['titleIdentity'=>$titleIdentity]);
    }
}

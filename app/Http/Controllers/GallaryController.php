<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\URL;
use Validator,Redirect,Response,File;
use DB;

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

        $gallery = DB::table('galleries')->where('status','1')->get();


        return view('gallary',['titleIdentity'=>$titleIdentity,'activeStatusHome'=>$activeStatusHome,
        'activeStatusContactUs'=>$activeStatusContactUs,'activeStatusGallary'=>$activeStatusGallary,
        'activeStatusAboutUs'=>$activeStatusAboutUs,'activeStatusNews'=>$activeStatusNews,
        'gallery'=>$gallery]);
    }

    public function add()
    {
        $titleIdentity="Add Gallery";
        return view('admin.addgallery',['titleIdentity'=>$titleIdentity]);
    }

    public function save(Request $request)
    {
        request()->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'tags' => 'required',
            'image' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024'
        ]);
        
        $gallery = new Gallery();
        $gallery->title = $request->input('title');
        $gallery->subtitle = $request->input('subtitle');
        $gallery->tags = $request->input('tags');

            if ($request->hasFile('image')) {
                $image = $request->file('image') ;
            $destinationPath = 'upload/Gallery/'; // upload path
            $profileImage = 'upload/Gallery/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $gallery->image = "$profileImage";
        }else {
            $gallery->image = 'upload/Gallery/default.jpg';
            }
        $gallery->save();
        return Redirect::to("AddGallery")->withSuccess('Great! Your Image Added Sucessfully.');
    }

    public function edit()
    {
        $titleIdentity="Edit Gallery";
        $gallery = DB::table('galleries')->get();
        return view('admin.editgallery',['titleIdentity'=>$titleIdentity,'gallery'=>$gallery]);
    }

     public function DeleteGallery($id){
        DB::table('galleries')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Image Delete Sucessfully !');
    }

    public function MarkAsDisableGallery($id)
    {
        $task=Gallery::find($id);
        $task->status='0';
        $task->save();
        return redirect()->back()->with('message', 'Image Disabled Sucessfully !');
    }


    public function MarkAsActiveGallery($id)
    {
        $task=Gallery::find($id);
        $task->status='1';
        $task->save();
        return redirect()->back()->with('message', 'Image Activated Sucessfully !');
    }

}

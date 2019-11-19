<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;
use Illuminate\Support\Facades\URL;
use Validator,Redirect,Response,File;
use DB;

class TestimonialsController extends Controller
{
    public function add()
    {
        $titleIdentity="Add Testimonials";
        return view('admin.addtestimonials',['titleIdentity'=>$titleIdentity]);
    }

    public function save(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'stars' => 'required|integer',
            'image' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            'ratings' => 'required|string|max:255',
        ]);
        
        $testimonials = new Testimonials();
        $testimonials->name = $request->input('name');
        $testimonials->stars = $request->input('stars');
        $testimonials->ratings = $request->input('ratings');

            if ($request->hasFile('image')) {
                $image = $request->file('image') ;
            $destinationPath = 'upload/Testimonials/'; // upload path
            $profileImage = 'upload/Testimonials/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $testimonials->image = "$profileImage";
        }else {
            $testimonials->image = 'upload/Testimonials/default.jpg';
            }
        $testimonials->save();
        return Redirect::to("AddTestimonials")->withSuccess('Great! Your Review Added Sucessfully.');
    }

     public function edit()
    {
        $titleIdentity="Edit Testimonials";
        $testimonials = DB::table('testimonials')->get();
        return view('admin.edittestimonials',['titleIdentity'=>$titleIdentity,'testimonials'=>$testimonials]);
    }

    public function MarkAsDisableTestimonials($id)
    {
    $task=Testimonials::find($id);
    $task->status='0';
    $task->save();
    return redirect()->back()->with('message', 'Testimonials Disabled Sucessfully !');
    }


    public function MarkAsActiveTestimonials($id)
    {
    $task=Testimonials::find($id);
    $task->status='1';
    $task->save();
    return redirect()->back()->with('message', 'Testimonials Activated Sucessfully !');
    }

    public function DeleteTestimonials($id){
        // $filename=DB::table('testimonials')->select('image')->where('id', $id)->get();
        // return $filename;
        // File::delete($filename);
        DB::table('testimonials')->where('id', $id)->delete();
        
        return redirect()->back()->with('message', 'Testimonials Delete Sucessfully !');
    }


  public function updateview($id)
    {
        $titleIdentity="Update Testimonials";
        $testimonials = DB::table('testimonials')->where('id',$id)->get();
        return view('admin.updatetestimonials',['titleIdentity'=>$titleIdentity,'testimonials'=>$testimonials]);
    }



      public function UpdateTestimonials(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'stars' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            'ratings' => 'required|string|max:255',
        ]);
        
        $testimonials = new Testimonials();
        $id = $request->input('id');
        $testimonials->name = $request->input('name');
        $testimonials->stars = $request->input('stars');
        $testimonials->ratings = $request->input('ratings');

            $data=array(
              'name' => $testimonials->name,
              'stars'=>$testimonials->stars,
              'ratings'=>$testimonials->ratings,
            );
            Testimonials::where('id',$id)->update($data);

        $testimonials->update();
        return Redirect::to("EditTestimonials")->withSuccess('Great! Your Review Update Sucessfully.');
    }




}

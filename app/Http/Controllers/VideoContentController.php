<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoContent;
use Illuminate\Support\Facades\DB;
class VideoContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoContent = VideoContent::paginate(5);
        return view('video-content-show',compact('videoContent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video-content-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videoContent= new VideoContent;
        if($request->hasfile('file'))
        {

            $name=$request->file->getClientOriginalName();
            $request->file->storeAs('public/videofile', $name);
            $videoContent->vd_description=$request->get('description');
            $videoContent->vd_number=$request->get('number');
            $videoContent->vd_link="";
            $videoContent->vd_name=$name;
        }
        else{
            $videoContent->vd_description=$request->get('description');
            $videoContent->vd_number=$request->get('number');
            $videoContent->vd_name="";
            $videoContent->vd_link=$request->get('link1');
        }

        $videoContent->save();

        return redirect('videocontent')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videocontent=VideoContent::find($id);
        return view('videocontent.edit',compact('videocontent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $videoContent= VideoContent::find($id);
        if($request->hasfile('vd_name'))
        {

            $name=$request->file->getClientOriginalName();
            $request->file->storeAs('public/videofile', $name);
            $videoContent->vd_description=$request->get('vd_description');
            $videoContent->vd_number=$request->get('vd_number');
            $videoContent->vd_link="";
            $videoContent->vd_name=$name;
        }
        else{
            $videoContent->vd_description=$request->get('vd_description');
            $videoContent->vd_number=$request->get('vd_number');
            $videoContent->vd_name="";
            $videoContent->vd_link=$request->get('vd_link');
        }
        $videoContent->save();

        return redirect('videocontent')->with('success', 'Information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("video_contents")->where('id',$id)->delete();
        return back()->withMessage('Video Content Deleted');
    }
}

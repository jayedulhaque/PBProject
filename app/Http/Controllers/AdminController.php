<?php

namespace App\Http\Controllers;
use App\BanglaWordCollection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\VideoContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function audio_edit()
    {
    	$banglaWordCollection = BanglaWordCollection::paginate(25);
        return view('admin.audio-edit',compact('banglaWordCollection'));
    }
    function video_edit()
    {
    	$videoContent = VideoContent::paginate(5);
        return view('admin.video-edit',compact('videoContent'));
    }
    function word_search(Request $request)
    {
        $q = Input::get ( 'q' );
        if($q != ""){
            $banglaWordCollection = BanglaWordCollection::where ( 'BanglaWord', 'LIKE', '%' . $q . '%' )->paginate (25)->setPath ( '' );
            $pagination = $banglaWordCollection->appends ( array (
                'q' => Input::get ( 'q' )
            ) );
            if (count ( $banglaWordCollection ) > 0)
                return view ( 'admin.adminwordsearchlist' )->withDetails ( $banglaWordCollection )->withQuery ( $q );
        }
        return view ( 'admin.adminwordsearchlist' )->withMessage ( 'No Details found. Try to search again !' );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginationController extends Controller
{
    function fetch_data(Request $request)
    {
    	if($request->ajax())
    	{
    		$comments = DB::table('comments')->simplePaginate (2);
    		return view('pagination_data',compact('comments'))->render();
    	}
    }
}

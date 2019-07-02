<?php

namespace App\Http\Controllers;

use App\BanglaWordCollection;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class BanglaWordCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $banglaWordCollection = BanglaWordCollection::paginate(25);
        return view('banglaword',compact('banglaWordCollection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banglawords.bangla-word-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {

            $name=$request->filename->getClientOriginalName();
            $request->filename->storeAs('public/audiofile', $name);
         }
        $banglaWordCollection= new BanglaWordCollection;
        $banglaWordCollection->BanglaWord=$request->get('BanglaWord');
        $banglaWordCollection->WordPronouciation=$request->get('WordPronouciation');
        $banglaWordCollection->Meaning=$request->get('Meaning');
        $banglaWordCollection->PostedDate = Carbon::now();
        $banglaWordCollection->AudioFile=$name;
        $banglaWordCollection->save();

        return redirect('banglaword')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BanglaWordCollection  $banglaWordCollection
     * @return \Illuminate\Http\Response
     */
    public function show(BanglaWordCollection $banglaWordCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BanglaWordCollection  $banglaWordCollection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banglaWord=BanglaWordCollection::find($id);
        return view('banglawords.edit',compact('banglaWord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BanglaWordCollection  $banglaWordCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasfile('filename'))
         {

            $name=$request->filename->getClientOriginalName();
            $request->filename->storeAs('public/audiofile', $name);
         }
        $banglaWord=BanglaWordCollection::find($id);
        $banglaWord->BanglaWord=$request->get('BanglaWord');
        $banglaWord->WordPronouciation=$request->get('WordPronouciation');
        $banglaWord->Meaning=$request->get('Meaning');
        $banglaWord->AudioFile=$name;
        $banglaWord->save();
        return redirect('banglaword')->with('success', 'Information has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BanglaWordCollection  $banglaWordCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("banglawordcollections")->where('id',$id)->delete();
        return back()->withMessage('BanglaWord Deleted');
    }
}

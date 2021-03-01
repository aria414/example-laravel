<?php

namespace App\Http\Controllers;

use App\Models\DataList;
use Illuminate\Http\Request;

class DataListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataList::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newlist = new DataList;
        $newlist->id = $request->id;
        $newlist->listItem = $request->listItem;
        $newlist->author = $request->author;
        $newlist->save();
    
        return response()->json($newlist);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function show(DataList $list)
    {
        return DataList::Find($list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $editlist = DataList::Find($id);
        $editlist->id = $request->id;
        $editlist->listItem = $request->listItem;
        $editlist->author = $request->author;
        $editlist->save();
        
        return response()->json($editlist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataList $list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $editlist = DataList::Find($id);
        $editlist->delete();
        return response()->json(["message"=>"item deleted", "item" => $editlist]);
    }
}

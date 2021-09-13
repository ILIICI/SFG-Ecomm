<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FileUploadProfileRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileUploadProfileRequest $request)
    {
        $store_to_DB = new Document;
        $user = Auth::id();
        $store_to_DB->belong_To_User = $user;
        $now = date('Y-m-d');
        $store_to_DB->uploaded_On_Date = $now ;
        if($request->hasfile('file-upload')){
            
            $file = $request->file('file-upload');
            $filename = $file->getClientOriginalName();
            $fileextension = $file->extension();

            $create_file_name = $user.'_'.time().'_'.$filename;
            $file->move('uploads/documents/',$create_file_name);

            $store_to_DB->document_path = $create_file_name;
        }
        $store_to_DB->save();
        return redirect()->back()->with('message', 'Picture uploaded');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

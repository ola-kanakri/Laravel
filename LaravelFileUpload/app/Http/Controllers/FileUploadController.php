<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
class FileUploadController extends Controller
{
    public function index()
    {
        return view('file-upload');
    }
 
    public function store(Request $request)
    {

       $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,png,jpeg|max:2048',

           ]);
 
        $name = $request->file('file')->getClientOriginalName();
 
        $path = $request->file('file')->store('public/files');
 
 
        $f = new File();
 
        $f->name = $name;
        $f->path = $path;
        $f->save();
        return redirect('file-upload')->with('status', 'File Has been uploaded successfully');
 
    }
}
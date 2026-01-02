<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;

class imageController extends Controller
{
    public function create()
{
    $details = Details::all();
    return view('category.image', compact('details'));
}



    public function upload(request $request){

        $validate=request()->validate([
            'name'=>'required|string|max:10',
            'image'=>'required|mimes:png,jpg,jpeg,webp|max:2048',
            'email'=>'required|email|unique:details,email',
            'phone'=>'required|max:10|string',
        ]);

        if($request->hasFile('image')){
            $imagepath=$request->file('image')->store('details','public');
            $validate['image']= $imagepath;
        };

        details::create($validate);

        return redirect()->back()->with('success','Record Added Succesfully');

    }

}

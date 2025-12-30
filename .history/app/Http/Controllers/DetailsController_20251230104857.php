<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Details::paginate(10);
        return view('category.index', [
            'details' => $details
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'status' => 'nullable'
        ]);

           Details::create($request->all());
        // dd($request->all());

        // Details::created([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'status' =>$request->status
        // ]);

        return redirect('/Details')->with('status','Detail Added Succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Details $details)
    {
        return view('category.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Details $details)
    {
        // dd($details);
        $details = De

        return view('category.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Details $details)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'status' => 'nullable'
        ]);

        //  Details::create($request->all());
        // dd($request->all());

        $details->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' =>$request->status
        ]);

        return redirect('/Details')->with('status','Detail Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Details $details)
    {
        //
    }
}
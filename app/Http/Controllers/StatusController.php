<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $statuse = Status::all();
        return view('status.article', compact('statuse'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $statuse = Status::all();
        return view('status.create',compact('statuse'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);

        // Menyimpan data status ke dalam database
        Status::create([
            'status' => $request->input('status')
        ]);

        return redirect()->route('dashboard')->with('status', 'Status berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $status = Status::find($id);
    return view('status.edit', compact('status'));
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id,)
    {
        Status::where('id', $id)->update([
            'status' => $request->status,
        ]);
        return redirect()->to('dashboard.index')->with('massage', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
    }
}

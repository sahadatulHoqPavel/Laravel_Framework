<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches',$batches);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputData = $request->all();
        Batch::create($inputData);
        return redirect('batches');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Course $in ) : View
    {
        $batch = Batch::find($id);
        return view('batches.show')->with('batch',$batch);
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $batch = Batch::find($id);
        return view('batches.edit')->with('batch',$batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batches');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batch = Batch::find($id);
        $batch->delete();
        return redirect('batches');
    }
}

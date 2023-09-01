<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blotter;
use Illuminate\Support\Facades\Storage;

class BlotterController extends Controller
{
    public function index()
    {
        $blotters = Blotter::all();
        return view('admin.blotter', ['blotters' => $blotters]);
    }
    public function create()
    {
        return view('admin.create_blotter');
    }
    public function store(Request $request)
    {
        $request->validate([
            'complainant' => 'required|max:255',
            'respondent' => 'required',
            'victim' => 'required',
            'type' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'details' => 'required',
            'status'=>'required',
        ]);
    
        $blotterItem = new Blotter;
        $blotterItem->complainant = $request->input('complainant');
        $blotterItem->respondent = $request->input('respondent');
        $blotterItem->victim = $request->input('victim');
        $blotterItem->type = $request->input('type');
        $blotterItem->location = $request->input('location');
        $blotterItem->date = $request->input('date');
        $blotterItem->time = $request->input('time');
        $blotterItem->details = $request->input('details');
        $blotterItem->status = $request->input('status');
        $blotterItem->save();
    
        return redirect()->route('admin.blotter.index')->with('success', 'Dashboard item created successfully.');
    }
    public function edit(Blotter $blotter)
    {
        return view('admin.edit_blotter', compact('blotter'));
    }
    public function update(Request $request, $id)
    {
        $blotter = Blotter::findOrFail($id);
        $request->validate([
            'complainant' => 'required|max:255',
            'respondent' => 'required',
            'victim' => 'required',
            'type' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'details' => 'required',
            'status'=>'required',
        ]);

        $blotter->complainant = $request->input('complainant');
        $blotter->respondent = $request->input('respondent');
        $blotter->victim = $request->input('victim');
        $blotter->type = $request->input('type');
        $blotter->location = $request->input('location');
        $blotter->date = $request->input('date');
        $blotter->time = $request->input('time');
        $blotter->details = $request->input('details');
        $blotter->status = $request->input('status');
        $blotter->save();

        return redirect()->route('admin.blotter.index')->with('success', 'Announcement updated successfully.');
    }
    public function destroy($id)
    {
        $blotter = Blotter::findOrFail($id);
        $blotter->delete();
        return redirect()->route('admin.blotter.index')->with('success', 'Announcement deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
   
    public function index()
    {
        $announcements = Announcement::paginate(10);
        return view('admin.announcement', compact('announcements'));
    }

    public function create()
    {
        return view('admin.create_announcement');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $uploadedFile = $request->file('image');
        $filename = time() . '-' . $uploadedFile->getClientOriginalName();
        $path = $uploadedFile->storeAs('uploads', $filename, 'public');
    
        $announcementItem = new Announcement;
        $announcementItem->title = $request->input('title');
        $announcementItem->description = $request->input('description');
        $announcementItem->image = $path;
        $announcementItem->save();
    
        return redirect()->route('admin.announcements.index')->with('success', 'Announcement item created successfully.');
    }
    public function edit(Announcement $announcement)
    {
        return view('admin.edit_announcement', compact('announcement'));
    }
    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $announcement->title = $request->input('title');
        $announcement->description = $request->input('description');
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($announcement->image);
            $uploadedFile = $request->file('image');
            $filename = time() . '-' . $uploadedFile->getClientOriginalName();
            $path = $uploadedFile->storeAs('uploads', $filename, 'public');
            $announcement->image = $path;
        }
        $announcement->save();

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement updated successfully.');
    }
    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        Storage::disk('public')->delete($announcement->image);
        $announcement->delete();
        return redirect()->route('admin.announcements.index')->with('success', 'Announcement deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Activity::all();
        return view('admin.list_activity', ['rows' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_activity');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/activities', $imageName); // Simpan di storage/app/public/activities
            $imagePath = 'activities/' . $imageName; // Path yang disimpan di database
        }

        $row = new Activity;
        $row->name = $validated['name'];
        $row->content = $validated['content'];
        $row->image = $imagePath;
        $row->uploaded_by = Auth::user()->name;
        $row->save();
        return back()->with('success', 'Data has been saved');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Activity::find($id);
        return view('admin.edit_activity', ['row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'content' => 'required',
        ]);

        $row = Activity::find($id);
        $row->name = $validated['name'];
        $row->content = $validated['content'];
        $row->uploaded_by = Auth::user()->name;
        $row->save();

        return back()->with('success', 'Data has been updated');
    }

    public function update_file(Request $request, string $id)
    {
        $validatesd = $request->validate([
            'image' => 'image|image:jpeg,jpg,png'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/activities', $imageName); // Simpan di storage/app/public/activities
            $imagePath = 'activities/' . $imageName; // Path yang disimpan di database
        }

        $row = Activity::find($id);
        $row->image = $imagePath;
        $row->save();

        return back()->with('message', 'Image has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Activity::find($id);
        $row->delete();

        return redirect('/activities/list');
    }
}

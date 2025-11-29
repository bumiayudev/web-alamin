<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Structure::paginate();
        return view('admin.list_structure', ['rows' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_structure');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('uploads/structures', $imageName); // Simpan di storage/app/public/uploads/activities
            $imagePath = 'uploads/structures/' . $imageName; // Path yang disimpan di database
        }

        $row = new Structure;
        $row->name = $validated['name'];
        $row->position = $validated['position'];
        $row->image = $imagePath;
        $row->save();
        return back()->with('success', 'Data has been saved');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Structure::find($id);
        return view('admin.edit_structure', ['row' => $row]);
    }

    /**
     * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
        ]);

        $row = Structure::find($id);
        $row->name = $validated['name'];
        $row->position = $validated['position'];
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
            $request->file('image')->storeAs('uploads/structures', $imageName); // Simpan di storage/app/public/uploads/structures
            $imagePath = 'uploads/structures/' . $imageName; // Path yang disimpan di database
        }

        $row = Structure::find($id);
        $row->image = $imagePath;
        $row->save();

        return back()->with('message', 'Image has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Structure::find($id);
        $row->delete();

        return redirect('/structures/list');
    }
}

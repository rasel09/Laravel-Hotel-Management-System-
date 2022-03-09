<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomType = RoomType::latest()->get();
        return view('admin.roomType.index', compact('roomType'));
    }
    public function create()
    {
        return view('admin.roomType.create');
    }
    public function store(Request $request)
    {
        //validation form 
        $request->validate([
            'title' => 'required|unique:room_types|max:255',
            'detels' => 'required',

        ]);
        RoomType::create([
            'title' => $request->title,
            'detels' => $request->detels,
        ]);
        return redirect()->route('roomtype.index')->with('success', 'RoomType Added Success !');
    }
    public function show($id)
    {
        $roomType = RoomType::find($id);
        return view('admin.roomType.show', compact('roomType'));
    }
    public function edit($id)
    {
        $roomType = RoomType::find($id);
        return view('admin.roomType.edit', compact('roomType'));
    }

    public function update(Request $request, $id)
    {
        //validation form 
        $request->validate([
            'title' => 'required|unique:room_types|max:255',
            'detels' => 'required',

        ]);
        RoomType::find($id)->update([
            'title' => $request->title,
            'detels' => $request->detels,
        ]);
        return redirect()->route('roomtype.index')->with('success', 'RoomType Updated Success !');
    }
    public function destroy($id)
    {
        RoomType::destroy($id);
        return redirect()->route('roomtype.index')->with('success', 'RoomType Deleted Success !');
    }
}
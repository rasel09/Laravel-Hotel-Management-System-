<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::latest()->get();
        return view('admin.room.index', compact('room'));
    }
    public function create()
    {
        $roomTypes = RoomType::latest()->get();
        return view('admin.room.create', compact('roomTypes'));
    }
    public function store(Request $request)
    {
        //validation form 
        $request->validate([
            'title' => 'required|unique:room_types|max:255',


        ]);
        Room::create([
            'title' => $request->title,
            'roomType_id' => $request->roomType_id,

        ]);
        return redirect()->route('room.index')->with('success', 'Room Added Success !');
    }
    public function show($id)
    {
        $room = Room::find($id);
        return view('admin.room.show', compact('room'));
    }
    public function edit($id)
    {
        $roomEdit = Room::find($id);
        $roomTypes = RoomType::latest()->get();
        return view('admin.room.edit', compact('roomEdit', 'roomTypes'));
    }

    public function update(Request $request, $id)
    {
        //validation form 
        $request->validate([
            'title' => 'required|unique:room_types|max:255',


        ]);
        Room::find($id)->update([
            'title' => $request->title,
            'roomType_id' => $request->roomType_id,

        ]);
        return redirect()->route('room.index')->with('success', 'Room Updated Success !');
    }
    public function destroy($id)
    {
        Room::destroy($id);
        return redirect()->route('room.index')->with('success', 'Room Deleted Success !');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;


class PlaylistController extends Controller
{
    public function show()
    {
        $playlists = Playlist::all(); 
        return view('play', compact('playlists'));
    }

    public function add(Request $request)
    {
        Playlist::create([
            'shopname' => $request->shopname,
            'ply' => $request->ply,
        ]);

        return redirect()->back();

    }


}

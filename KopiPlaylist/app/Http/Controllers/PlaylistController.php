<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;


class PlaylistController extends Controller
{
    public function showname()
    {
        $playlists = Playlist::all(); 
        return view('play', compact('playlists'));
    }

    public function showplaylist()
    {
        $playlists = Playlist::all(); 
        return view('playinfo', compact('playlists'));
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

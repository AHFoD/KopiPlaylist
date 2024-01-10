<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\DB;


class PlaylistController extends Controller
{

    public function getPlaylist()

    {
        $playlists = DB::connection('supabase')->select('select * from playlist');
        return view('play', compact('playlists'));
    }
    // public function show()
    // {
    //     $playlists = Playlist::all(); 
    //     return view('play', compact('playlists'));
    // }

    public function showplaylist()
    {
        $playlists = Playlist::all(); 
        return view('playlistinfo', compact('playlists'));
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

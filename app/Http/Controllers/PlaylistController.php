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
        return view('welcome', compact('playlists'));
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

    public function addData(Request $request)
    {
        $tableName = 'playlist';

        // Sample data (replace this with your actual data)
        $data = [
            [
                'shopname' => $request->shopname,
                'playlist_url' => $request->playlist_url,
            ],
        ];

         // Specify the column to check for conflicts

        // Perform upsert operation
        DB::connection('supabase')->table($tableName)->insert($data);

        // Fetch the updated data
        // $updatedData = DB::connection('supabase')->table($tableName)->get();

        return redirect()->back();

        // return view('welcome', compact('updatedData'));
    }


}

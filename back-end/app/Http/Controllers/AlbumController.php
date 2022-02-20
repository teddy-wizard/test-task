<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;


class AlbumController extends Controller{


    public function getAlbums($user_id)
    {
        $albums  = Album::where('user_id', $user_id)->get();
        return response()->json($albums);
    }

    public function getAlbum($id)
    {
        $album  = Album::find($id);
        return response()->json($album);
    }

    public function saveAlbum(Request $request, $user_id)
    {
        $album = Album::create($request->all());
        $album = new Album();
        $album->user_id = $user_id;
        $album->title = $request->input('title');
        $album->description = $request->input('description');
        $album->img = $request->input('img');
        $album->featured = $request->input('featured');
        return response()->json($album);
    }

    public function deleteAlbum($id)
    {
        $album  = Album::find($id);
        $album->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function updateAlbum(Request $request, $id)
    {
        $album  = Album::find($id);
        $album->title = $request->input('title');
        $album->description = $request->input('description');
        $album->img = $request->input('img');
        $album->featured = $request->input('featured');
        $album->save();
        return response()->json($album);
    }

}

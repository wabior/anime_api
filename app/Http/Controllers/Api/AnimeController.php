<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        return Anime::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $anime = new Anime();
        $anime->title = $data['title'];
        $anime->description_0 = $data['description_0'];
        $anime->description_1 = $data['description_1'] ?? null;
        $anime->description_2 = $data['description_2'] ?? null;
        $anime->characters = $data['characters'] ?? null;
        $anime->episodes = $data['episodes'] ?? null;
        $anime->css_id = $data['css_id'] ?? null;
        $anime->images_id = $data['images_id'] ?? null;

        $anime->save();

        return view('add')->with(['saved_title' => $data['title']]);
    }

    public function show(Anime $anime)
    {
        return $anime;
    }

    public function update(Request $request, Anime $anime)
    {
        //
    }

    public function destroy(Anime $anime)
    {
        //
    }
}

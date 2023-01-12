<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistadModel;



class ArtistadController extends Controller
{
    function HomeIndex()
    {
        return view('/Test');

    }
    function DataInsert(Request $request)
    {
        $artiste = $request->input('Artiste');
        $genre = $request->input('Genre');
        $annee = $request->input('Annee');

        $isInsertSuccress = ArtistadModel::insert([
            'artiste' => $artiste,
            'genre' => $genre,
            'annee' => $annee
        ]);

        if ($isInsertSuccress)
            echo '<h1>Insert Success</h1>';
        else
            echo '<h1>Insert Failed</h1>';
    }
}
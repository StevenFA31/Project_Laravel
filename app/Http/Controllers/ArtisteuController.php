<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtisteuModel;


class ArtisteuController extends Controller
{
    function ArtisteIndex()
    {
        return view('/artiste');
    }
    function DataInsert3(Request $request)
    {
        $nom = $request->input('artiste');

        $isInsertSuccress = ArtisteuModel::insert(
            [
                'nom' => $nom,
            ]
        );
        return redirect('list');
    }
}
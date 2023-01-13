<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenreuModel;


class GenreuController extends Controller
{
    function GenreIndex()
    {
        return view('/genre');
    }
    function DataInsert2(Request $request)
    {
        $nom = $request->input('genre');
        $isInsertSuccress = GenreuModel::insert(
            [
                'nom' => $nom,
            ]
        );
        return redirect('list');
    }
}
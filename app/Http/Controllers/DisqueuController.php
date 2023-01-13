<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisqueuModel;


class DisqueuController extends Controller
{
    function DisqueIndex()
    {
        return view('/disque');
    }
    function DataInsert(Request $request)
    {
        $annee = $request->input('annee');

        $isInsertSuccress = DisqueuModel::insert(
            [
                'artiste' => '',
                'genre' => '',
                'annee' => $annee

            ]
        );
        return redirect('list');
    }
}
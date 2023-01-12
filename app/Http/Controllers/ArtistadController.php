<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistadModel;



class ArtistadController extends Controller
{
    function addData(Request $req)
    {
        $artistad = new ArtistadModel;
        $artistad->artiste = $req->artiste;
        $artistad->genre = $req->genre;
        $artistad->annee = $req->annee;
        $artistad->save();
        return redirect('add');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artiste;
use App\Models\Disque;



class ArtisteController extends Controller
{

    public function list()
    {
        $artistes = Artiste::all();
        return view('artiste_list', compact('artistes'));
    }

    public function show($id)
    {
        $artiste = Artiste::find($id);
        $disques = Disque::where('artiste_id', $id)->with('genre')->get();
        return view('artiste_show', ['disques' => $disques, 'artiste' => $artiste]);
    }

    public function create(Request $request)
    {
        if ($request->input('nom') !== null) {
            $artiste = new Artiste;
            $artiste->nom = $request->input('nom');
            $artiste->save();
            return redirect('/artiste');
        }

        return view('artiste_form', ['path' => 'create']);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->input('nom') !== null) {
            $artiste = Artiste::find($request->input('id'));
            $artiste->nom = $request->input('nom');
            $artiste->save();
            return redirect('/artiste');
        }
        $artiste = Artiste::find($id);
        return view('artiste_form', ['path' => 'update', 'artiste' => $artiste]);
    }

    public function delete($id)
    {
        $artiste = Artiste::find($id);
        $artiste->delete();
        return redirect('/artiste');
    }

    public function destroy()
    {
        return redirect('/artiste');
    }
}

// class ArtisteController extends Controller
// {
//     function ArtisteIndex()
//     {
//         return view('/artiste');
//     }
//     function DataInsert3(Request $request)
//     {
//         $artiste = $request->input('artiste');

//         $isInsertSuccress = Artiste::insert(
//             [
//                 'artiste' => $artiste,
//                 'genre' => '',
//                 'annee' => ''
//             ]
//         );
//         return redirect('liste');
//     }

//     public function index()
//     {
//         return view('artiste', ['artisteus' => Artiste::all()]);
//     }
// }
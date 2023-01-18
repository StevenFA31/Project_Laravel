<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Models\Genre;
use App\Models\Disque;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DisqueController extends Controller
{

    public function list()
    {
        $disques = Disque::with('artiste', 'genre')->get();
        return view('disque_list', compact('disques'));
    }

    public function show($id)
    {
        $disque = Disque::find($id);
        return view('disque_show', compact('disque'));
    }

    public function create(Request $request)
    {
        if ($request->input('annee') && $request->input('titre') !== null) {
            $disque = new Disque;
            $disque->titre = $request->input('titre');
            $disque->annee = $request->input('annee');
            $disque->artiste_id = $request->input('artiste');
            $disque->genre_id = $request->input('genre');
            $disque->save();
            return redirect('/disque');
        }
        $artistes = Artiste::all();
        $genres = Genre::all();
        return view('disque_form', ['path' => 'create', 'artistes' => $artistes, 'genres' => $genres]);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->input('annee') && $request->input('titre') !== null) {
            $disque = Disque::find($request->input('id'));
            $disque->annee = $request->input('annee');
            $disque->titre = $request->input('titre');
            $disque->save();
            return redirect('/disque');
        }
        $artistes = Artiste::all();
        $genres = Genre::all();
        $disque = Disque::find($id);
        // dd($disques);
        return view('disque_form', ['path' => 'update', 'disque' => $disque, 'artistes' => $artistes, 'genres' => $genres]);
    }

    public function delete($id)
    {
        $disque = Disque::find($id);
        $disque->delete();
        return redirect('/disque');
    }

    public function destroy()
    {
        return redirect('/disque');
    }
}


// class DisqueController extends Controller
// {
//     function DisqueIndex()
//     {
//         return view('/disque');
//     }
//     function DataInsert(Request $request)
//     {
//         $annee = $request->input('annee');

//         $isInsertSuccress = Disque::insert(
//             [
//                 'artiste' => '',
//                 'genre' => '',
//                 'annee' => $annee
//             ]
//         );
//         return redirect('liste');
//     }

//     public function index()
//     {
//         return view('disque', ['disques' => Disque::all()]);
//     }

//     public function list()
//     {
//         $disques = Disque::with('artiste', 'genre')->get();
//         return view('disque_list', compact('disques'));
//     }

//     public function show($id)
//     {
//         $library = Disque::find($id);
//         return view('disque_show', compact('disques'));
//     }

//     public function create(Request $request)
//     {
//         if ($request->input('annee') !== null) {
//             $disque = new Disque();
//             $disque->artiste_id = $request->input('artiste');
//             $disque->genre_id = $request->input('genre');
//             $disque->annee = $request->input('annee');
//             $disque->save();
//             return redirect('/disque');
//         }
//         $artistes = Artiste::all();
//         $genres = Genre::all();
//         return view('disque_form', ['path' => 'create', 'artistes' => $artistes, 'genres' => $genres]);
//     }

//     public function update(Request $request, $id = null)
//     {
//         if ($request->input('annee') !== null) {
//             $disque = Disque::find($request->input('id'));
//             $disque->annee = $request->input('annee');
//             $disque->save();
//             return redirect('/disque');
//         }
//         $artistes = Artiste::all();
//         $genres = Genre::all();
//         $disques = Disque::find($id);
//         return view('disque_form', ['path' => 'update', 'disques' => $disques, 'artistes' => $artistes, 'genres' => $genres]);
//     }
//     public function delete($id)
//     {
//         $disque = Disque::find($id);
//         $disque->delete();
//         return redirect('/disque');
//     }

//     public function destroy()
//     {
//         return redirect('/disque');
//     }
// }
<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Disque;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function list()
    {
        $genres = Genre::all();
        return view('genre_list', compact('genres'));
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        $disques = Disque::where('genre_id', $id)->with('artiste')->get();
        return view('genre_show', ['disques' => $disques, 'genre' => $genre]);
    }

    public function create(Request $request)
    {
        if ($request->input('nom') !== null) {
            $genre = new Genre;
            $genre->nom = $request->input('nom');
            $genre->save();
            return redirect('/genre');
        }

        return view('genre_form', ['path' => 'create']);
    }

    public function update(Request $request, $id = null)
    {
        if ($request->input('nom') !== null) {
            $genre = Genre::find($request->input('id'));
            $genre->nom = $request->input('nom');
            $genre->save();
            return redirect('/genre');
        }
        $genre = Genre::find($id);
        return view('genre_form', ['path' => 'update', 'genre' => $genre]);
    }

    public function delete($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect('/genre');
    }

    public function destroy()
    {
        return redirect('/genre');
    }
}

// class GenreController extends Controller
// {
//     function GenreIndex()
//     {
//         return view('/genre');
//     }
//     function DataInsert2(Request $request)
//     {
//         $nom = $request->input('nom');


//         $isInsertSuccress = Genre::insert(
//             [
//                 'nom' => $nom
//             ]
//         );
//         return redirect('liste');
//     }

//     public function index()
//     {
//         return view('genre', ['genreus' => Genre::all()]);
//     }
// }
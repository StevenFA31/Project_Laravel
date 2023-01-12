<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestModel;

// use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    // public function index()
    // {

    // function addDataa(Request $req)
    // {
    // }
    function HomeIndex()
    {
        return view('/Test');

    }
    function DataInsert(Request $request)
    {
        $name = $request->input('name');
        $namename = $request->input('namename');
        $phone = $request->input('phone');

        $isInsertSuccress = TestModel::insert([
            'firstname' => $name,
            'lastname' => $namename,
            'lebigo' => $phone
        ]);

        if ($isInsertSuccress)
            echo '<h1>Insert Success</h1>';
        else
            echo '<h1>Insert Failed</h1>';
    }

// $test = new TestModel;
// $test->firstname = $req->firstname;
// $test->lastname = $req->lastname;
// $test->lebigo = $req->lebigo;
// $test->save();
// return redirect('test');

// return DB::select("select * from Conférence");

// return view('test');
}

// NE PAS OUBLIER DE METTRE LA DATABASE=Conférence  pour que ça fonctionne !!! 
// }
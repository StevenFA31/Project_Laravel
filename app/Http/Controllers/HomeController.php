<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // $user = HomeController::create([
        //     'first_name' => 'Taylor',
        //     'last_name' => 'Otwell',
        //     'title' => 'Developer',
        // ]);

        // $users = DB::table('users')->get();

        return view('home');
    }


// public function list()
// {
//     return view('home');
// }
// public function show()
// {
//     return view('home');
// }
// public function create()
// {
//     return view('home');
// }
// public function update()
// {
//     return view('home');
// }
// public function delete()
// {
//     return view('home');
// }
// public function destroy()
// {
//     return view('home');
// }


}

?>
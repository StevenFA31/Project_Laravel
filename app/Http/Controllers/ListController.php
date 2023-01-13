<?php

namespace App\Http\Controllers;


use App\Models\DisqueuModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    function show()
    {
        return DisqueuModel::all();
    }
}
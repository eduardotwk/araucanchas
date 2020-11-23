<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecintoController extends Controller
{
    public function index()
    {
        return view('recinto.index');
    }
    public function create()
    {
        return view('recinto.create');
    }
    public function delete()
    {
        return view('recinto.delete');
    }
}

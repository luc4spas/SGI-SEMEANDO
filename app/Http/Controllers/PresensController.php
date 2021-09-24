<?php

namespace App\Http\Controllers;
use App\Models\Presens;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PresensController extends Controller
{
    public function index()
    {
        $presens = \App\Models\Presens::all();
        return view('dashboard', compact('presens'));
    }

   

    protected function create(Request $request)
    {
        $presenca = new \App\Models\Presens();

        $presenca->name = $request->name;

        $presenca->save();
        return view('sucesso');
    }
}

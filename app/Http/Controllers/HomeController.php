<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Presens;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $p = DB::table('presens')
        ->select('name', DB::raw('count(*) as QTD', 'name'))
        ->groupBy('name')
        ->orderBy('name')
        ->get();
        
        $presens = \App\Models\Presens::all();
        $presens_1 = DB::table('presens')->whereDay('created_at', '=', 21)->get();
        $count = DB::table('presens')->count();
        //dd($presens_1);
        return view('dashboard', compact('presens', 'presens_1', 'count', 'p'));
       
    }
    public function show($name)
    {   
       
        $presens = DB::table('presens')->where('name', '=', $name)->orderBy('created_at')->get();
        $count = DB::table('presens')->where('name', '=', $name)->count();
        return view('membro', compact('presens', 'count'));
        
    }

    public function select()
    {
        
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('info')->where('id','1120141251')->first();

        return view('home',
                [
                    'id'     => $users->id,
                    'name'   => $users->name,
                    'state'  => $users->state,
                    'grade'  => $users->grade,
                    'belong' => $users->belong,
                ]);
    }
}

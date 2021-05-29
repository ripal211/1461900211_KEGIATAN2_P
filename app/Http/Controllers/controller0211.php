<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller0211 extends Controller

{
    public function buku(){
        $buku = DB::table('buku')->get();
        
        return view('buku0211',['buku' => $buku]);
    }

}
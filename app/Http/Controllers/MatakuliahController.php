<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){
        return "Menampilkan data matakuliah";
    }

    public function show(string $param1){
        return "Anda mengakses matakuliah: ".$param1;
    }
}

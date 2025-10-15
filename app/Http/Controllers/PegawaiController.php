<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use carbon\Carbon;

class PegawaiController extends Controller
{
     public function index()
    {
        // Data contoh
        $name = "Mila";
        $birthDate = Carbon::create(2005, 8, 30);
        $my_age = $birthDate->age;

        $hobbies = ["Membaca", "Menonton", "Gaming", "Olahraga"];

        $tgl_harus_wisuda = Carbon::create(2028, 7, 30); // contoh target wisuda
        $today = Carbon::now();
        $time_to_study_left = $today->diffInDays($tgl_harus_wisuda, false);

        $current_semester = 3;
        $future_goal = "Menjadi Software Engineer";


        if ($current_semester < 3) {
            $motivasi = "Masih Awal, Kejar TAK";
        } else {
            $motivasi = "Jangan main-main, kurangi main game!";
        }

        // Kirim data ke view
       return view('pegawai', compact(
    'name',
    'my_age',
    'hobbies',
    'tgl_harus_wisuda',
    'time_to_study_left',
    'current_semester',
    'motivasi',
    'future_goal'
));

    }
}

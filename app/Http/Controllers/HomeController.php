<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            /* Cara 1 */
        $data ['username']        = 'Mila';
        $data ['last_login']      = date('Y-m-d H:i:s');
        $data ['list_pendidikan'] = ['SD','SMP','SMA','S1','S2','S3'];
        return view('home', $data );

        /* atau Cara 2 */
        $data = [
            'username'        => 'Heroku',
            'last_login'      => date('Y-m-d H:i:s'),
            'list_pendidikan' => ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']
        ];
        return view('home', $data);

        /* atau Cara 3 */
        $username        = 'Heroku';
            $last_login      = date('Y-m-d H:i:s');
            $list_pendidikan = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
        return view('home', compact('username', 'last_login', 'list_pendidikan'));

    }

    public function signup(Request $request){
        dd($request->all());
        $request->validate([
		    'name'  => 'required|max:10',
		    'email' => ['required','email'],
		    'password' => [
		        'required',           // Wajib diisi
		        'string',             // Harus berupa string
		        'min:8',              // Minimal 8 karakter
		        'regex:/[a-z]/',      // Harus mengandung setidaknya 1 huruf kecil
		        'regex:/[A-Z]/',      // Harus mengandung setidaknya 1 huruf besar
		        'regex:/[0-9]/',      // Harus mengandung setidaknya 1 angka
		    ],
		]);

        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;
        return view('signup-success', $pageData);
    }

    public function redirectTo($tujuan){
        $tujuan = strtolower($tujuan);
        if($tujuan == 'login'){
            return redirect()->route('auth.login');
        }elseif($tujuan == 'belanja'){
            return redirect()->away('https://www.shopee.com');
        }else{
            return redirect()->route('home')->with('info', 'selamat datang'   );
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

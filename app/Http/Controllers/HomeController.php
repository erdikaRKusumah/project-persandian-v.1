<?php

namespace App\Http\Controllers;

use App\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('client.home');
    }

    public function redirect()
    {
        if (auth()->user()->is_admin) {
            return redirect()->route('admin.home')->with('status', session('status'));
        }

        return redirect()->route('client.home')->with('status', session('status'));
    }

    public function simpan_data_responden(Request $request)
    {
        $request->validate([
            'identitas_instansi_perusahaan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'email' => 'required',
            'pengisi_lembar_evaluasi' => 'required',
            'jabatan' => 'required',
            'tgl_pengisian' => 'required',
            'deskripsi' => 'required',
            
        ]);
        // print_r(Auth::user()->id);
        // Responden::create($request->all());
    //    $responden = $request->all();
       DB::table('respondens')->insert([
        [   'identitas_instansi_perusahaan' => $request->identitas_instansi_perusahaan,
        'alamat' => $request->alamat,
        'no_telpon' => $request->no_telpon,
        'email' => $request->email,
        'pengisi_lembar_evaluasi' => $request->pengisi_lembar_evaluasi,
        'jabatan' => $request->jabatan,
        'tgl_pengisian' => $request->tgl_pengisian,
        'deskripsi' => $request->deskripsi,
            'user_id' => auth()->id(),
        
        
        ]
    ]);
    // Responden::create($request->all());
    //    $responden->user()->sync($request->input(Auth::user()->id, []));
    //    Responden::create($responden);
    //    print_r(auth()->id());

        // $id = Responden::orderBy('id', 'desc')->first();        
        // return view('client.test', compact($id));
        // return redirect('test', $id);
        // print_r($responden);

        return redirect(('test'))->with('message', 'Data Berhasil disimpan ! Silahkan isi Kuesioner di Bawah Ini.');
    }

}

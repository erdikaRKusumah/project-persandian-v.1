<?php

namespace App\Http\Controllers;

use App\Responden;
use Illuminate\Http\Request;

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
        
        Responden::create($request->all());

        $id = Responden::orderBy('id', 'desc')->first();        
        // return view('client.test', compact($id));
        // return redirect('test', $id);

        return redirect(('test'))->with('message', 'Data Berhasil disimpan ! Silahkan isi Kuesioner di Bawah Ini.');
    }

}

<?php

namespace App\Http\Controllers;

use App\Responden;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    // public function index()
    // {
    //     // //
    //     // $students = Student::all();
    //     // return view('students/index', ['students' => $students]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('responden.isiData');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        // Responden::create($request->all());
        // return redirect('/isiKuesioner');

        $responden = new Responden;

        $responden->id_responden = $request->input('id_responden');
        $responden->identitas_instansi_perusahaan = $request->input('identitas_instansi_perusahaan');
        $responden->alamat = $request->input('alamat');
        $responden->no_telpon = $request->input('no_telpon');
        $responden->email = $request->input('email');
        $responden->pengisi_lembar_evaluasi = $request->input('pengisi_lembar_evaluasi');
        $responden->jabatan = $request->input('jabatan');
        // $responden->tgl_pengisian = $request->input('tgl_pengisian');
        $responden->deskripsi = $request->input('deskripsi');

        $responden->save();

        return redirect('/dataResponden')->with('success', 'Data Telah Tersimpan');

    }

    public function show(respondens $responden)
    {
        return $responden::all();
    }

   

}

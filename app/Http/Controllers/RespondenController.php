<?php

namespace App\Http\Controllers;

use App\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespondenController extends Controller
{

    public function index() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('responden.isiKuesioner', ['pertanyaan'=> $pertanyaan]);
    }
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

        Responden::create($request->all());
        // return redirect('/isiKuesioner');

        // $responden = implode(",", $request->pilihan);

        // DB::table('respondens')->insert(
        //     ['id_responden'=>$request->id_responden,
        //     'identitas_instansi_perusahaan'=>$request->identitas_instansi_perusahaan,
        //     'alamat'=>$request->alamat,
        //     'no_telpon'=>$request->no_telpon,
        //     'email'=>$request->email,
        //     'pengisi_lembar_evaluasi'=>$request->pengisi_lembar_evaluasi,
        //     'jabatan'=>$request->jabatan,
        //     'deskripsi'=>$request->deskripsi

        // ]);
        return redirect('/isiKuesioner');

    }

    public function show(respondens $responden)
    {
        return $responden::all();
    }

   public function destroy($id)
    {
        return $id_responden;
    }

}

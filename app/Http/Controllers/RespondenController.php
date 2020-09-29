<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use App\Kategori;
use App\Jawaban;
use App\Responden;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RespondenController extends Controller
{

    public function index(Kategori $kategori) {
        // $pertanyaan = DB::table('pertanyaans')->get();

    //     $pilihan = $pertanyaan->pilihan;
    //     $create_array = [];
    //     foreach ($this->$pilihan as $key => $value) {
    //     # code...
    //     $create_array[$key] = $value;
    // }
    // return $create_array;
        
        $kategori->pilihan = unserialize($kategori->pilihan);
        return view('responden.isiKuesioner', compact('kategori'));
        
        
        
        // return view('responden.isiKuesioner');
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
            'id_responden' => 'required',
            'identitas_instansi_perusahaan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'email' => 'required',
            'pengisi_lembar_evaluasi' => 'required',
            'jabatan' => 'required',
            'tgl_pengisian' => 'required',
            'deskripsi' => 'required',
        ]);

        $resId = $request->res_id;
        Respondens::updateOrCreate([
            ['id' => $res_id],
            'id_responden' => $request->id_responden,
            'identitas_instansi_perusahaan' => $request->identitas_instansi_perusahaan,
            'alamat' => $request->alamat,
            'no_telpon'=>$request->no_telpon,
            'email'=>$request->email,
            'jabatan'=>$request->jabatan,
            'tgl_pengisian'=>$request->tgl_pengisian,
            'deskripsi'=>$request->deskripsi

        ]);
        if(empty($request->res_id))
            $msg = 'Customer entry created successfully.';
        else
            $msg = 'Customer data is updated successfully';
        return redirect()->route('dataResponden.index')->with('success',$msg);
    }


        // Responden::create($request->all());
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
        // return redirect('/isiKuesioner');


    function show(responden $responden)
    {
        return $responden::all();
    }

    function destroy($id)
    {
       DB::table('respondens')->where('id',$id)->delete();
        return redirect('/dataResponden');
    }

     function edit($id){
        $where = array('id' => $id);
        $responden = Respondens::where($where)->first();
        return Response::json($responden);
    }

}

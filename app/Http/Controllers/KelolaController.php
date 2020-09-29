<?php

namespace App\Http\Controllers;
use App\Pertanyaan;
use App\Kategori;
use App\Jawaban;
use App\Responden;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = DB::table('pertanyaans')->get();
        return view('admin.kelolaPertanyaan', ['pertanyaan'=> $pertanyaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::table('kategoris')->get();
        return view('admin.create', ['kategori'=> $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pertanyaan $pertanyaan)
    {
        
        // $pilihan = json_encode($request->pilihan);
        
        //aaaa

        // $id_kategori = DB::table('kategori')->select('id_kategori')->where('kategori', $request->id_kategori)->get();
        $arr = $request->all();
        $surveyItem = $pertanyaan->create($arr);
        
        // DB::table('pertanyaans')->insert(
        //     ['id_kategori' => $request->id_kategori,
        //     'pertanyaan'=> $request->pertanyaan,
        //     'pilihan'=>$request->pilihan]
        // );
        

        return redirect("/halamanAdmin");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id = null)
    {
        if($request->isMethod('post')) {
            $data = $request->all();
            Pertanyaan::where(['id'=>$id])->update(['id'=>$data['id'], 'id_kategori'=>$data['id_kategori'], 'pilihan'=>$data['pilihan'], 'pertanyaan'=>$data['pertanyaan']]);
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pertanyaans')->where('id',$id)->delete();
        return redirect('/kelolaPertanyaan');
    }
}
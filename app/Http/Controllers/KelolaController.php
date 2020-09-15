<?php

namespace App\Http\Controllers;
use App\Pertanyaan;
use App\Kategori;
use App\Jawaban;
use App\Responden;
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
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('admin.kelolaPertanyaan', ['pertanyaan'=> $pertanyaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::table('kategori')->get();
        return view('admin.create', ['kategori'=> $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pilihan = implode(",", $request->pilihan);
        
        DB::table('pertanyaan')->insert(
            ['id_kategori' => $request->id_kategori,
            'pertanyaan'=> $request->pertanyaan,
            'pilihan'=>$pilihan]
        );
        

        return redirect('/halamanAdmin');
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
    public function edit($id)
    {
        //
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
        return $id_pertanyaan;
    }
}

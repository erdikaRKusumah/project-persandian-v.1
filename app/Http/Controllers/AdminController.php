<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kategori = DB::table('kategori')->get();
        return view('admin.halamanAdmin', ['kategori'=> $kategori]);
    }

    public function show()
    {
        $responden = DB::table('responden')->get();
        return view('admin.dataResponden', ['responden'=> $responden]);
    }

}

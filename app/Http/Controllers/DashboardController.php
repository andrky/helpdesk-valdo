<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				return view('index',[
					'title' => "Dashboard",
					'open' => Pengaduan::where('status', '=' , 'open')->count(),
					'progress' => Pengaduan::where('status', '=' , 'progress')->count(),
					'close' => Pengaduan::where('status', '=' , 'close')->count(),
					'openTeknisi' => Pengaduan::where('user_id', '=', auth()->user()->id)
																							->where('status', '=' , 'open')->count(),
					'progressTeknisi' => Pengaduan::where('user_id', '=', auth()->user()->id)
																							->where('status', '=', 'progress')->count(),
					'closeTeknisi' => Pengaduan::where('user_id', '=', auth()->user()->id)
																							->where('status', '=' , 'close')->count(),
					'openUser' => Pengaduan::where('karyawan_id', '=', auth()->user()->id)
																							->where('status', '=' , 'open')->count(),
					'progressUser' => Pengaduan::where('karyawan_id', '=', auth()->user()->id)
																							->where('status', '=', 'progress')->count(),
					'closeUser' => Pengaduan::where('karyawan_id', '=', auth()->user()->id)
																							->where('status', '=' , 'close')->count()
				]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Team;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengaduan.pengaduan', [
					'title' => "Pengaduan",
					'karyawans' => User::where('level', '!=' , 'teknisi')->where('level', '!=' , 'superadmin')->get(),
					'divisis' => Divisi::all(),
					'teams' => Team::all(),
					'kategoris' => Kategori::all(),
					'teknisis' => User::where('level', '=' , 'teknisi')->get(),
					'pengaduans' => Pengaduan::all(),
					'pengaduansTeknisi' => Pengaduan::where('user_id', '=', auth()->user()->id)->get(),
					'pengaduansUser' => Pengaduan::where('karyawan_id', '=', auth()->user()->id)->get(),
					'tgl_proses' => Carbon::now(),
					'tgl_selesai' => Carbon::now()
				]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.pengaduantambah', [
					'title' => "Tambah Pengaduan",
					'karyawans' => User::where('level', '!=' , 'teknisi')->where('level', '!=' , 'superadmin')->get(),
					'divisis' => Divisi::all(),
					'teams' => Team::all(),
					'kategoris' => Kategori::all(),
					'teknisis' => User::where('level', '=' , 'teknisi')->get(),
					'pengaduans' => Pengaduan::all(),
					'tgl_proses' => Carbon::now(),
					'tgl_selesai' => Carbon::now()
					
				]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
					'karyawan_id' => 'required',
					'divisi_id' => 'required',
					'team_id' => 'required',
					'kategori_id' => 'required',
					'user_id' => 'required',
					'masalah' => 'required|max:255',
					'penyelesaian' => 'required',
					'status' => 'required',
					'tgl_proses' => 'required',
					'tgl_selesai' => 'required'
				]);

				Pengaduan::create($validateData);

				return redirect('/pengaduan')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        return view('pengaduan.pengaduanedit', [
					'title' => "Edit Pengaduan",
					'karyawans' => User::where('level', '!=' , 'teknisi')->where('level', '!=' , 'superadmin')->get(),
					'divisis' => Divisi::all(),
					'teams' => Team::all(),
					'kategoris' => Kategori::all(),
					'teknisis' => User::where('level', '=' , 'teknisi')->get(),
					'pengaduans' => $pengaduan,
					'tgl_proses' => Carbon::now(),
					'tgl_selesai' => Carbon::now()
					
				]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $rules = [
					'karyawan_id' => 'required',
					'divisi_id' => 'required',
					'team_id' => 'required',
					'kategori_id' => 'required',
					'user_id' => 'required',
				];

				if($request->masalah != $pengaduan->masalah) {
					$rules['masalah'] = 'required|max:255';
				}
				if($request->penyelesaian != $pengaduan->penyelesaian) {
					$rules['penyelesaian'] = 'required';
				}
				if($request->status != $pengaduan->status) {
					$rules['status'] = 'required';
				}
				if($request->tgl_proses != $pengaduan->tgl_proses) {
					$rules['tgl_proses'] = 'required';
				}
				if($request->tgl_selesai != $pengaduan->tgl_selesai) {
					$rules['tgl_selesai'] = 'required';
				}

				$validatedData = $request->validate($rules);

				Pengaduan::where('id', $pengaduan->id)
						->update($validatedData);

				return redirect('/pengaduan')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
				Pengaduan::destroy($pengaduan->id);

				return redirect('/pengaduan')->with('success', 'Data berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Divisi;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				return view('karyawan.karyawan', [
					'title' => "Karyawan",
					'karyawans' => Karyawan::all()
				]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.karyawantambah', [
					'title' => "Tambah Karyawan",
					'karyawans' => Karyawan::all(),
					'divisis' => Divisi::all(),
					'teams' => Team::all()
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
					'divisi_id' => 'required',
					'team_id' => 'required',
					'karyawan' => 'required|max:255',
					'jabatan' => 'required|max:255'
				]);

				Karyawan::create($validateData);

				return redirect('/karyawan')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.karyawanedit', [
					'title' => "Edit Karyawan",
					'karyawans' => $karyawan,
					'divisis' => Divisi::all(),
					'teams' => Team::all()
				]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $rules = [
					'divisi_id' => 'required',
					'team_id' => 'required'
				];

				if($request->karyawan != $karyawan->karyawan) {
					$rules['karyawan'] = 'required|max:255';
				}

				if($request->jabatan != $karyawan->jabatan) {
					$rules['jabatan'] = 'required|max:255';
				}

				$validatedData = $request->validate($rules);

				Karyawan::where('id', $karyawan->id)
						->update($validatedData);

				return redirect('/karyawan')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);

				return redirect('/karyawan')->with('success', 'Data berhasil dihapus!');
    }
}

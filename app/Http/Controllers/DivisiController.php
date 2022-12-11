<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('divisi.divisi', [
					'title' => "Divisi",
					'divisis' => Divisi::all()
				]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisi.divisitambah', [
					'title' => "Tambah Divisi"
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
					'divisi' => 'required|max:255',
					'team' => 'required|unique:divisis|max:255'
				]);

				Divisi::create($validateData);

				return redirect('/divisi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisi $divisi)
    {
        return view('divisi.divisiedit', [
					'title' => "Edit Kategori",
					'divisis' => $divisi
				]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        $rules = [
						'divisi' => 'required|max:255',
				];

				if($request->team != $divisi->team) {
					$rules['team'] = 'required|unique:divisis|max:255';
				}

				$validatedData = $request->validate($rules);

				Divisi::where('id', $divisi->id)
						->update($validatedData);

				return redirect('/divisi')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        Divisi::destroy($divisi->id);

				return redirect('/divisi')->with('success', 'Data berhasil dihapus!');
    }
}

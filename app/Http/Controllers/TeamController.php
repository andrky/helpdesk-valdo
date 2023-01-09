<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Divisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('team.team', [
					'title' => "Team",
					'teams' => Team::all()
				]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.teamtambah', [
					'title' => "Tambah Team",
					'divisis' => Divisi::all()
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
					'team' => 'required|unique:teams|max:255',
					'divisi_id' => 'required'
				]);

				Team::create($validateData);

				return redirect('/team')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('team.teamedit', [
					'title' => "Edit Team",
					'teams' => $team,
					'divisis' => Divisi::all(),
				]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $rules = [
					'divisi_id' => 'required'
				];

				if($request->team != $team->team) {
					$rules['team'] = 'required|unique:teams|max:255';
				}

				$validatedData = $request->validate($rules);

				Team::where('id', $team->id)
						->update($validatedData);

				return redirect('/team')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Team::destroy($team->id);

				return redirect('/team')->with('success', 'Data berhasil dihapus!');
    }
}

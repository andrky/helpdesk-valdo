<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\KnowledgeManagement;
use App\Http\Controllers\Controller;

class KnowledgeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('km.km', [
					'title' => "Tambah Pengaduan",
					'pengaduans' => Pengaduan::all()
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
     * @param  \App\Models\KnowledgeManagement  $knowledgeManagement
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeManagement $knowledgeManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KnowledgeManagement  $knowledgeManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeManagement $knowledgeManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KnowledgeManagement  $knowledgeManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeManagement $knowledgeManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KnowledgeManagement  $knowledgeManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeManagement $knowledgeManagement)
    {
        //
    }
}

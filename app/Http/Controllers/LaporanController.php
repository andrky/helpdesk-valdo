<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use PDF;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $pengaduans = Pengaduan::whereBetween('created_at',[$start_date,$end_date])->get();
				$title = 'Laporan';
				} else {
						$pengaduans =  Pengaduan::all();
						$title = 'Laporan';
				}
						return view('laporan.laporan', [
							'title' => $title,
							'pengaduans' => $pengaduans
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

		public function export(){
				$todayDate = Carbon::now()->format('d-m-Y');
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('laporan.laporan_pdf', ['pengaduans' => Pengaduan::all(), 'title' => 'Laporan', 'tanggal' => $todayDate])->setPaper('a4', 'landscape');;
        //mendownload laporan.pdf
				return $data->download('laporan.pdf');
    }
}

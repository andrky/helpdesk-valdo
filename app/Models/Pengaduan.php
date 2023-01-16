<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

		protected $guarded = ['id'];

		public function divisi() {
			return $this->belongsTo(Divisi::class);
    }

		public function karyawan() {
			return $this->belongsTo(Karyawan::class);
    }

		public function kategori() {
			return $this->belongsTo(Kategori::class);
    }

		public function team() {
			return $this->belongsTo(Team::class);
    }
}

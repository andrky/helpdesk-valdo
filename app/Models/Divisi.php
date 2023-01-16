<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Karyawan;
use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function karyawan() {
			return $this->hasMany(Karyawan::class);
    }

		public function team() {
			return $this->hasMany(Team::class);
    }

		public function pengaduan() {
			return $this->hasMany(Pengaduan::class);
    }
}

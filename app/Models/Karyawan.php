<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function divisi() {
      return $this->belongsTo(Divisi::class);
    }

		public function team() {
			return $this->belongsTo(Team::class);
		}

		public function user() {
			return $this->hasOne(User::class);
		}

		public function pengaduan() {
			return $this->hasMany(Pengaduan::class);
		}
}

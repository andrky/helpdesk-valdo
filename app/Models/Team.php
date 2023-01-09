<?php

namespace App\Models;

use App\Models\Divisi;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function karyawan() {
			return $this->hasMany(Karyawan::class);
    }

		public function divisi() {
			return $this->belongsTo(Divisi::class);
		}
}

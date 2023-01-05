<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Divisi;
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
}

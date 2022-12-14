<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Divisi::factory(4)->create();

				Team::factory(4)->create();

        Karyawan::factory(3)->create();

        Kategori::factory(3)->create();
    }
}

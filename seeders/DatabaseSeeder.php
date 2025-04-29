<?php

namespace Database\Seeders;

use App\Models\Anggota;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "nama"  => "Naufal Burhanuddin Yusuf",
            "hp"    => "085157649995",
        ]);
        Anggota::create([
            "nama"  => "Nur Fadilah Adi Putri",
            "hp"    => "081299827222",
        ]);
        Anggota::create([
            "nama"  => "Ayanggggkuu",
            "hp"    => "085157648885",
        ]);
    }
}

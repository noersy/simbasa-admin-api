<?php

namespace Database\Seeders;

use App\Models\Nasabah;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admin')->insert([
            'username' => "noersy",
            'password' => "123456",
        ]);

        DB::table('kecamatan')->insert([
            'nama_kecamatan' => "Parigi",
        ]);

        DB::table('kelurahan')->insert([
            'nama_kelurahan' => "Olaya",
            'kecamatan_id' => 1,
        ]);

        DB::table('bank_sampah')->insert([
            'nm_banksampah' => " ",
            'almt_banksampah' => " ",
            'telp' => "0000000000",
            'tgl_berdiri' => now(),
            'jenis_sampah' => " ",
            'nm_penggurus' => "noersy",
            'jml_karyawan' => 1,
            'jml_nasabah' => 5,
            'jml_simpanan' => 100000,
            'kelurahan_id' => 1,
            'email' => "noersy@gmail.com",
            'password' => Hash::make("123456"),
        ]);

        DB::table('kategori')->insert([
            'nm_kategori' => "plastik",
        ]);

        DB::table('pengepul')->insert([
            'nm_pengepul' => "Orang",
            'telp_pengepul' => " ",
            'alamat_pengepul' => " ",
            'alamat_pengepul' => "12345600000",
        ]);
    
        Nasabah::factory(5)->create();
    
    }
}

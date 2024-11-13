<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        DB::table('setting')->insert([
            [
                'nama_setting' => 'dealer',
                'display_name' => 'Nama Dealer',
                'icon' => 'fas fa-car-side',
                'form' => 'text',
                'value' => 'Mitsubishi Kartasura | PT. Sun Star Motor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_setting' => 'sales',
                'display_name' => 'Marketing Executive',
                'icon' => 'fas fa-user-tie',
                'form' => 'text',
                'value' => 'Yanis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_setting' => 'no_wa',
                'display_name' => 'Nomor Telp/Whatsapp',
                'icon' => 'fab fa-whatsapp',
                'form' => 'text',
                'value' => '6282133727946',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_setting' => 'alamat',
                'display_name' => 'Alamat',
                'icon' => 'fas fa-store',
                'form' => 'textarea',
                'value' => 'Jalan Ahmad Yani, No 151, Kartasura, Sukoharjo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_setting' => 'instagram',
                'display_name' => 'Instagram',
                'icon' => 'fab fa-instagram',
                'form' => 'text',
                'value' => 'https://www.instagram.com/sunstarmotorkartasura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_setting' => 'deskripsi',
                'display_name' => 'Deskripsi',
                'icon' => 'fas fa-file-alt',
                'form' => 'textarea',
                'value' => 'Mitsubishi Authorized Dealer SUN STAR MOTOR KARTASURA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

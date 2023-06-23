<?php

namespace Database\Seeders;

use App\Models\pemilik;
use App\Models\Tanah;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    function run(): void
    {
        pemilik::insert([
            [
                'namaPemilik'=>'afif',
                'nomerTelpon'=>'0856041',
                'alamat'=>'jember',
                'fotoProfile'=>'afif',
                'deskripsiDiri'=>'mahasiswa',
                
            ], 
            [
                'namaPemilik'=>'fadhil',
                'nomerTelpon'=>'123456789',
                'alamat'=>'jember',
                'fotoProfile'=>'afif',
                'deskripsiDiri'=>'Mahasiswa',
                
            ], 
        ]);
        User::insert([
            [
                
                'email' => 'admin@admin.com',
                'name' => 'admin',
                'password' => '1111111', // password
                // 'level' => 1,
                'fotoProfile'=>'20230621063113.download.png',
               'role' => 'admin',
            ],
        ]);
        

        Tanah::insert([
        [
            'id_pemilik'=>'1',
            
            'luas'=> '100 x 100',
            'alamat'=> 'jawatimur/jember/sumbersari/Kecamatan sumbersari/ Dusun krajanTimur/ RT/RW 002/002',
            'konturTanah'=>'datar',
            'hak_milik'=>'sendiri', 
            //fasiliats
            'listrik'=>'melewati lokasi',
            'sumberAir'=>'pemerintah',
            'koneksiJaringan'=>'connected',
            // 'KoneksiInternet'=>'modem seluler',
            'deskripsiTanah'=>'dijual tanah sudah siap bangunview sungai dan jungleluas tanah 4 area bentuk tanah segi empatkontur tanah datarsudah ada listrik dan aircocok untuk villa, rumah, atau investasiakses jalan mobiltanah menghadap utarafreehold ( SHM )lokasi di Guwang, Gianyar, Balidekat Hidden Canyon Guwang-5 menit dari Pantai Ketewel- 6 menit dari Pasar Sukawati- 16 menit dari Sanur- 25 menit dari Central Ubud- 35 menit dari Bandara Internasional Ngurah Rai',
            'statusJual'=>'terbatas',
            'hargaTanah'=>'300.000.000',
            'fotoTanah'=>'20230620211741.images.jpeg',
            'fotoDenah'=>'20230620204825.denah-tanah-17000-m2.jpg',

        ],
        [
            'id_pemilik'=>'1',
            
            'luas'=> '100 x 100',
            'alamat'=> 'jawatimur/jember/sumbersari/Kecamatan sumbersari/ Dusun krajanTimur/ RT/RW 002/002',
            'konturTanah'=>'datar',
            'hak_milik'=>'sendiri', 
            //fasiliats
            'listrik'=>'melewati lokasi',
            'sumberAir'=>'pemerintah',
            'koneksiJaringan'=>'connected',
            // 'KoneksiInternet'=>'modem seluler',
            'deskripsiTanah'=>'dijual tanah sudah siap bangunview sungai dan jungleluas tanah 4 area bentuk tanah segi empatkontur tanah datarsudah ada listrik dan aircocok untuk villa, rumah, atau investasiakses jalan mobiltanah menghadap utarafreehold ( SHM )lokasi di Guwang, Gianyar, Balidekat Hidden Canyon Guwang-5 menit dari Pantai Ketewel- 6 menit dari Pasar Sukawati- 16 menit dari Sanur- 25 menit dari Central Ubud- 35 menit dari Bandara Internasional Ngurah Rai',
            'statusJual'=>'terbatas',
            'hargaTanah'=>'300.000.000',
            'fotoTanah'=>'20230620211741.images.jpeg',
            'fotoDenah'=>'20230620204825.denah-tanah-17000-m2.jpg',
        ],
        [
            'id_pemilik'=>'1',
            
            'luas'=> '100 x 100',
            'alamat'=> 'jawatimur/jember/sumbersari/Kecamatan sumbersari/ Dusun krajanTimur/ RT/RW 002/002',
            'konturTanah'=>'datar',
            'hak_milik'=>'sendiri', 
            //fasiliats
            'listrik'=>'melewati lokasi',
            'sumberAir'=>'pemerintah',
            'koneksiJaringan'=>'connected',
            // 'KoneksiInternet'=>'modem seluler',
            'deskripsiTanah'=>'dijual tanah sudah siap bangunview sungai dan jungleluas tanah 4 area bentuk tanah segi empatkontur tanah datarsudah ada listrik dan aircocok untuk villa, rumah, atau investasiakses jalan mobiltanah menghadap utarafreehold ( SHM )lokasi di Guwang, Gianyar, Balidekat Hidden Canyon Guwang-5 menit dari Pantai Ketewel- 6 menit dari Pasar Sukawati- 16 menit dari Sanur- 25 menit dari Central Ubud- 35 menit dari Bandara Internasional Ngurah Rai',
            'statusJual'=>'terbatas',
            'hargaTanah'=>'300.000.000',
            'fotoTanah'=>'20230620211741.images.jpeg',
            'fotoDenah'=>'20230620204825.denah-tanah-17000-m2.jpg',
        ]]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/gyms', function () {
    return view('Gyms/index', [
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/
                classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Jolly',
                'ruang' => 'Kelas A',
                'rating' => '5'
            ],
            [
                'no' => 2,
                'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
                'nama' => 'Bungee ',
                'instruktur' => 'Agung',
                'ruang' => 'Kelas B',
                'rating' => '3',
            ],
            [
                'no' => 3,
                'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
                'nama' => 'Yogalates ',
                'instruktur' => 'Raka',
                'ruang' => 'Kelas C',
                'rating' => '4',
            ],
            [
                'no' => 4,
                'gambar' => 'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpg',
                'nama' => 'Boxing ',
                'instruktur' => 'Tebri',
                'ruang' => 'Kelas D',
                'rating' => '5',
            ]
        ]
    ]);
});

Route::get('/gyms/presensi', function () {
    return view('Gyms/presensi', [
        'classInfo' => [
            'nama' => 'Body Combat',
            'instruktur' => 'Jolly',
            'ruang' => 'Kelas D',
            'totalMember' => '6',
            'rating' => '5',
            'tgl' => '10-Okt-2023'
        ],
        'Cards' => [
            [
                "nama" => "Rakai Anandi Mahardika",
                "gambar" => "https://media.istockphoto.com/id/490931598/id/foto/monyet-melakukan-pemberatan.jpg?s=612x612&w=0&k=20&c=0rfSa4dMpjr8X7QMOlp8uK1KAbmBetNlqV5LovL_Tb4=",
                'email' => 'Raka@gmail.com',
                'noTelp' => '081391595012',
                'jenis' => 'Gold',
                'metode' => 'Deposit Kelas',
            ],
            [
                'nama' => 'Daniel Ricky Alexander ',
                'gambar' => 'https://media.istockphoto.com/id/490931598/id/foto/monyet-melakukan-pemberatan.jpg?s=612x612&w=0&k=20&c=0rfSa4dMpjr8X7QMOlp8uK1KAbmBetNlqV5LovL_Tb4=',
                'email' => 'Ricky@gmail.com',
                'noTelp' => '08213123123',
                'jenis' => 'Silver',
                'metode' => 'Deposit Uang',
            ],
            [
                'nama' => 'Agung Raynaldi Mangiri ',
                'gambar' => 'https://media.istockphoto.com/id/490931598/id/foto/monyet-melakukan-pemberatan.jpg?s=612x612&w=0&k=20&c=0rfSa4dMpjr8X7QMOlp8uK1KAbmBetNlqV5LovL_Tb4=',
                'email' => 'Agung@gmail.com',
                'noTelp' => '085976456777',
                'jenis' => 'Black',
                'metode' => 'Deposit Kelas',
            ],
            [
                'nama' => 'Patrick Nino Kolin Prama ',
                'gambar' => 'https://media.istockphoto.com/id/490931598/id/foto/monyet-melakukan-pemberatan.jpg?s=612x612&w=0&k=20&c=0rfSa4dMpjr8X7QMOlp8uK1KAbmBetNlqV5LovL_Tb4=',
                'email' => 'Patrick@gmail.com',
                'noTelp' => '089765332133',
                'jenis' => 'Black',
                'metode' => 'Deposit Uang',
            ],
            [
                'nama' => 'Ignatius sodhana Tebri Artanto ',
                'gambar' => 'https://media.istockphoto.com/id/490931598/id/foto/monyet-melakukan-pemberatan.jpg?s=612x612&w=0&k=20&c=0rfSa4dMpjr8X7QMOlp8uK1KAbmBetNlqV5LovL_Tb4=',
                'email' => 'Ignatius@gmail.com',
                'noTelp' => '082456763988',
                'jenis' => 'Gold',
                'metode' => 'Deposit Kelas',
            ],
            [
                'nama' => 'Kevin Jonathan Wijaya ',
                'gambar' => 'https://media.istockphoto.com/id/490931598/id/foto/monyet-melakukan-pemberatan.jpg?s=612x612&w=0&k=20&c=0rfSa4dMpjr8X7QMOlp8uK1KAbmBetNlqV5LovL_Tb4=',
                'email' => 'Kevin@gmail.com',
                'noTelp' => '082456311890',
                'jenis' => 'Silver',
                'metode' => 'Deposit Uang',
            ],
        ],
    ]);
});
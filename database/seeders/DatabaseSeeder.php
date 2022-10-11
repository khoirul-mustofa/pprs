<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        // DB::table('users')->insert([
        //     'name' => 'pprs',
        //     'username' => 'pprs',
        //     'email' => 'pprs@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // Berita::factory(100)->create();

        // User::factory(5)->create();

        // DB::table('users')->insert([
        //     'name' => 'mustofa',
        //     'email' => 'mustofa@gmail.com',
        //     'password'=> Hash::make('12345'),
        // ]);

        // DB::table('kategoris')->insert([
        //     'name' => 'Kilatan',
        //     'slug' => 'kilatan',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Pengajian',
        //     'slug' => 'pengajian',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Sorogan',
        //     'slug' => 'sorogan',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Yasinan',
        //     'slug' => 'yasinan',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Diniah',
        //     'slug' => 'diniah',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Bangunan',
        //     'slug' => 'bangunan',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Pesantren',
        //     'slug' => 'pesantren',
        // ]);
        // DB::table('kategoris')->insert([
        //     'name' => 'Haji',
        //     'slug' => 'haji',
        // ]);

        // DB::table('banners')->insert([
        //     'image' => 'banner/bannerpprs1.png',
        // ]);
        // DB::table('banners')->insert([
        //     'image' => 'banner/bannerpprs2.png',
        // ]);
        // DB::table('banners')->insert([
        //     'image' => 'banner/bannerpprs3.png',
        // ]);

        DB::table('sambutans')->insert([
            'title' => 'Lorem Ipsum',
            'name' => 'Lorem Ipsum',
            'image' => 'sambutan-image/oiiNraEL4l6gQZN0888FEO43vFAHn6nKRdY9a1v1.png',
            'konten' => 'This is Content'
        ]);
    }
}

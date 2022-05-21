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
        User::factory(5)->create();
        Berita::factory(20)->create();

        // DB::table('users')->insert([
        //     'name' => 'khoirul',
        //     'email' => 'khoirul@gmail.com',
        //     'password'=> Hash::make('12345'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'mustofa',
        //     'email' => 'mustofa@gmail.com',
        //     'password'=> Hash::make('12345'),
        // ]);

        DB::table('kategoris')->insert([
            'name' => 'Kilatan',
            'slug'=> 'kilatan',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Pengajian',
            'slug'=> 'pengajian',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Sorogan',
            'slug'=> 'sorogan',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Yasinan',
            'slug'=> 'yasinan',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Diniah',
            'slug'=> 'diniah',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Bangunan',
            'slug'=> 'bangunan',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Pesantren',
            'slug'=> 'pesantren',
        ]);
        DB::table('kategoris')->insert([
            'name' => 'Haji',
            'slug'=> 'haji',
        ]);
    }
}

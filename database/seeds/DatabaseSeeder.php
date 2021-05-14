<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use App\Models\SiteInfo;
use App\Models\Aboutus;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

            User::create([
                'name' => 'User',
                'email' => 'user@test.com',
                'password' => Hash::make('12345678'),
                'image' => 'defaults/user.png',
            ]);
            Admin::create([
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('123456789'),
                'is_super' => true,
                'image' => 'defaults/user.png',
            ]);
            SiteInfo::create([
                'name' => 'Company'
            ]);
            // Aboutus::create([

            //     'description'=>"What is Lorem Ipsum?
            //                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",

            // ]);
            /* UsersTableSeeder::class,
             AdminsTableSeeder::class,
            SiteInfosTableSeeder::class,
            AboutusTableSeeder::class,*/
    }
}

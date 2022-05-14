<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use App\Models\EventType;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'fullname' => 'Mohamad Alghaz Hernanda',
            'username' => 'alghazhernanda',
            'email' => 'gagaga.gagaga1235@gmail.com',
            'password' => bcrypt('gagaga'),
            'password_confirmation' => bcrypt('gagaga'),
            'is_admin' => '1'
        ]);

        User::create([
            'fullname' => 'hernandez',
            'username' => 'hernandezkeren',
            'email' => 'hernanda.hernanda2@gmail.com',
            'password' => bcrypt('gagaga'),
            'password_confirmation' => bcrypt('gagaga')
        ]);

        User::create([
            'fullname' => 'bariz',
            'username' => 'barizkampung',
            'email' => 'bariz@gmail.com',
            'password' => bcrypt('gagaga'),
            'password_confirmation' => bcrypt('gagaga')
        ]);

        User::create([
            'fullname' => 'almer',
            'username' => 'almersitompul',
            'email' => 'almer@gmail.com',
            'password' => bcrypt('gagaga'),
            'password_confirmation' => bcrypt('gagaga')
        ]);



        // User::create([
        //     'name' => 'Pep Guardiola',
        //     'email' => 'guardiola@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);



        EventType::create([
            'name' => 'tech',
            'slug' => 'tech'
        ]);

        EventType::create([
            'name' => 'social',
            'slug' => 'social'
        ]);

        EventType::create([
            'name' => 'sport',
            'slug' => 'sport'
        ]);

        Event::factory(20)->create();
    }
}

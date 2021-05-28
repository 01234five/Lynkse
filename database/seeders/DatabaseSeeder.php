<?php

namespace Database\Seeders;

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
        $this->call(UsersTableDataSeeder::class);
        $this->call(ConversationsTableDataSeeder::class);
        $this->call(MessagesTableSeeder::class);
        \App\Models\Room::factory(5)->create();
    }
}

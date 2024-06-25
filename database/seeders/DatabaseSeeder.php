<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
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
            'name' => 'SMA Negeri 3 Boyolali',
            'email' => 'smaga@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('smaga23')
        ]);

        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'petugas surat'
        ]);

    }
}

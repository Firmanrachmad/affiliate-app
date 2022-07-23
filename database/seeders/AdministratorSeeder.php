<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User;
        $admin->name = "administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("Corigudig2020@!");
        $admin->roles = "Administrator";
        $admin->save();
        $this->command->info("Admin berhasil ditambah");
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        User::findOrFail(1)->roles()->sync(1);   // l'utente "admin" avrà il ruolo admin
        User::findOrFail(2)->roles()->sync(2);  // l'utente "user" avrà il ruolo user
    }
}

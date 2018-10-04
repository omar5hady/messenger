<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Omar',
            'email' => 'omar.ramos@grupocumbres.com',
            'password' => bcrypt('oso123')
        ]);
        User::create([
            'name' => 'Juan Guzman',
            'email' => 'juan.guzman@grupocumbres.com',
            'password' => bcrypt('oso123')
        ]);
        User::create([
            'name' => 'Francisco Galvan',
            'email' => 'francisco.galvan@grupocumbres.com',
            'password' => bcrypt('oso123')
        ]);
    }
}

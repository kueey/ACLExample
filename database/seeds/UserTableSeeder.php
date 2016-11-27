<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $user = new \App\User();
            $user->email = "haizei5" . $i . "@2980.com";
            $user->password = bcrypt('admin');
            $user->name = 'haizei' . $i;
            $user->save();
        }
    }
}

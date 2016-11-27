<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Admin();
        $user->email = 'kueey@2980.com';
        $user->name = 'kueey';
        $user->password = bcrypt('admin');
        $user->save();
        dump('admin seed successful!');

    }
}

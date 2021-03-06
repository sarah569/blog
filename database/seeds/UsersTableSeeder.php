<?php

use Illuminate\Database\Seeder;

use  App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
        	'name' => 'sarah',
        	'email' => 'sarah.yossri@gmail.com',
        	'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.jpg',
            'about' => 'hgvhd dsjsdjk djgdhd slafj fkfdh',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}

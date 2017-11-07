<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name' => str_random(10),
//            'email' => str_random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);
        $user= new \App\User([
          'name'=>'Badran',
          'email'=>'badran@esprit.tn',
          'age'=>'69',
          'password'=>bcrypt('badran'),
        ]);
        $user->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
         $user->name = 'Aye';
         $user->email = 'aye@gmail.com';
         $user->password = Hash::make('123456789');
         $user->save();
          //mg mg
        //  $s1->name ="Mg Mg";
        //  $s1->email ="mgmg@gmail.com";
        //  $s1->address ="Yangon";
        //  $s1->save();
    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;

class TablesData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        $user->name='Usama Imdad';
        $user->email='usamaimdadsian@gmail.com';
        $user->password=bcrypt( 'XY5vr}SS&r+%Z~KA');
        $user->Authority='admin';
        $user->save();
    }
}

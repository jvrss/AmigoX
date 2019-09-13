<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
    }
}

class UserTableSeeder extends Seeder{
    
    public function run(){
        DB::table('users')->delete();
        
        User::create([
            'name'=> 'João',
            'email'=> 'asd@asd.com',
            'password'=> bcrypt('asd'),
        ]);       
        
        User::create([
            'name'=> 'qwe',
            'email'=> 'qwe@asd.qwe',
            'password'=> bcrypt('qweqweqwe'),
        ]);    
    }
    
}

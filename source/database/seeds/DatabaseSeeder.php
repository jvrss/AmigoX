<?php

use Illuminate\Database\Seeder;

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
        
        \App\User::create([
                'name'=> 'João',
                'email'=> 'asd@asd.com',
                'password'=> bcrypt('asd'),
               ]);        
    }
    
}

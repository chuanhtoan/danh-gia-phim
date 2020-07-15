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
        $this->call(UserSeeder::class);

        $this->call(PhimGroupSeeder::class);
        
        // $this->call(AdminGroupSeeder::class);
    }
}

class UserSeeder extends Seeder{

    public function run()
    {
        DB::table('User')->insert([
            ['username'=>'admin','password'=>bcrypt('admin'),'email'=>'admin@gmail.com','hinh'=>'admin.png','loai'=>'admin'],
            ['username'=>'user','password'=>bcrypt('user'),'email'=>'user@gmail.com','hinh'=>'user.png','loai'=>'user'],
            ['username'=>'user1','password'=>bcrypt('user'),'email'=>'user1@gmail.com','hinh'=>'user1.png','loai'=>'user'],
            ['username'=>'user2','password'=>bcrypt('user'),'email'=>'user2@gmail.com','hinh'=>'user2.png','loai'=>'user'],
            ['username'=>'user3','password'=>bcrypt('user'),'email'=>'user3@gmail.com','hinh'=>'user3.png','loai'=>'user'],
        ]);
    }
}

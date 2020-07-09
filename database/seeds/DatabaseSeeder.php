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
        DB::table('User')->insert(
            [
                'username'=>'admin',
                'password'=>bcrypt('admin'),
                'loai'=>'admin',
            ]
        );
    }
}

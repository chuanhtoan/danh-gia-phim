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

        $this->call(AdminGroupSeeder::class);
    }
}

class UserSeeder extends Seeder{

    public function run()
    {
        DB::table('User')->insert([
            ['username'=>'admin','password'=>bcrypt('admin'),'email'=>'Minh Anh','dateOfBirth'=>'11-1-1998',
            'hinh'=>'https://i.pinimg.com/564x/e6/57/55/e65755e73d8085e30aedfa21fde07f1b.jpg','loai'=>'admin'],
            ['username'=>'user','password'=>bcrypt('user'),'email'=>'Hiếu','dateOfBirth'=>'2-5-2002',
            'hinh'=>'https://thuthuatnhanh.com/wp-content/uploads/2018/07/anh-dai-dien-boy-cam-kiem-samurai-kyo-520x390.jpg','loai'=>'user'],
            ['username'=>'user1','password'=>bcrypt('user'),'email'=>'Tiểu Ánh','dateOfBirth'=>'17-2-2001',
            'hinh'=>'https://anhdephd.com/wp-content/uploads/2019/10/anh-avatar-ngau-chat-cho-con-gai.jpg','loai'=>'user'],
            ['username'=>'user2','password'=>bcrypt('user'),'email'=>'Phùng Thế Tài','dateOfBirth'=>'22-3-2000',
            'hinh'=>'https://anhdephd.com/wp-content/uploads/2019/07/hinh-anh-avatar-chibi-cute-de-thuong-dep-nhat-cho-facebook-1-575x560.png','loai'=>'user'],
            ['username'=>'user3','password'=>bcrypt('user'),'email'=>'Minh Em','dateOfBirth'=>'12-12-1999',
            'hinh'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/08/anh-avatar-hai-nguoi.jpg','loai'=>'user'],
        ]);
    }
}

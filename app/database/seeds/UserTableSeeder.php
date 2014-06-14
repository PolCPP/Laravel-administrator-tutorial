<?php


class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'username'   => 'admin',
            'email'      => 'admin@mysite.com',
            'password'   => Hash::make('thepass'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }

}
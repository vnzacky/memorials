<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('password_resets')->delete();

        $faker = Faker::create();

        DB::table('users')->insert(
            ['name' => 'John Nguyen',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'birthday' => $faker->date('Y-m-d'),
                'address' => $faker->streetAddress,
                'phone' => $faker->phoneNumber,
                'group' => 'admin']);

        foreach(range(1,10) as $index) {
            DB::table('users')->insert(
                ['name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123456'),
                'birthday' => $faker->date('Y-m-d'),
                'address' => $faker->streetAddress,
                'phone' => $faker->phoneNumber,
                'group' => 'member']
            );
        }

    }

}

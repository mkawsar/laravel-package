<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=1; $i <=99; $i++) {
            $user = new User();
            $user->name = $faker->name($faker->randomElement(['male', 'female']));
            $user->email = $faker->email;
            $user->email_verified_at = Carbon::now()->toDateTimeString();
            $user->password = bcrypt(123456);
            $user->save();
        }
    }
}

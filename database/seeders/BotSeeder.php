<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Bot');
        for ($b = 0;$b <= 20;$b++){
            $user = User::pluck('id')->random();
            DB::table('bots')->insert([
                'user_id' => $user,
                'bot_name' => 'reddit-bot-'.$user,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Keyword');
        for ($k = 0; $k <= 300;$k++){
            $bot = Bot::pluck('id')->random();
            DB::table('keywords')->insert([
                'bot_id' => $bot,
                'keyword' => $faker->word(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

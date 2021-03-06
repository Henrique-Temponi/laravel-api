<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OneLinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('one_liners')->insert([
            'oneliner' => "Hello boys! I'm back!",
            'movie' => 'Independence Day (1996)',
            'character' => 'idk'
        ]);
    }
}

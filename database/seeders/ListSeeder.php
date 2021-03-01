<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_list')->insert([
            'id' => 1,
            'listItem' => 'Install docker',
            'author' => 'number 1',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LakeSeeder extends Seeder
{
    const TABLE = 'lake';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB ::table(self::TABLE) -> truncate();

        DB ::table(self::TABLE) -> insert([
            ['name' => 'juodis'],
            ['name' => 'baldis'],
            ['name' => 'aisetas'],
        ]);
    }
}

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
            ['name' => 'Akelė'],
            ['name' => 'Akytė'],
            ['name' => 'Alaušai'],
            ['name' => 'Alnis'],
            ['name' => 'Ambraziškių'],
            ['name' => 'Antaniškių'],
            ['name' => 'Antapusnės'],
            ['name' => 'Arinas'],
            ['name' => 'Asveja'],
            ['name' => 'Ašakinis'],
            ['name' => 'Baldonas'],
            ['name' => 'Baltelis'],
            ['name' => 'Baltis'],
            ['name' => 'Baltys'],
            ['name' => 'Baraukinis'],
            ['name' => 'Bedugnis'],
            ['name' => 'Bliūdelis'],
            ['name' => 'Berža'],
            ['name' => 'Blenda'],
            ['name' => 'Bliūdelis'],
            ['name' => 'Bliudinis'],
            ['name' => 'Bliūdys'],
            ['name' => 'Dagas'],
            ['name' => 'Daujotiškės'],
            ['name' => 'Delviai'],
            ['name' => 'Dirvelinis'],
            ['name' => 'Dumblis'],
            ['name' => 'Dumblys'],
            ['name' => 'Duobys'],
            ['name' => 'Duobulis'],
            ['name' => 'Duobužis'],
            ['name' => 'Dūriai'],
            ['name' => 'Dvilypiai'],
            ['name' => 'Dvyliškis'],
            ['name' => 'Eglynas'],
            ['name' => 'Elniukas'],
            ['name' => 'Ešerinis'],
            ['name' => 'Ežerė'],
            ['name' => 'Ežerinis'],
            ['name' => 'Gaidamonių'],
            ['name' => 'Gaidžiukas'],
            ['name' => 'Gaimynas'],
            ['name' => 'Galinis'],
            ['name' => 'Galnakis'],
            ['name' => 'Galnakis'],
            ['name' => 'Galuonai'],
            ['name' => 'Galuonis'],
            ['name' => 'Galvelis'],
            ['name' => 'Gavėnas'],

        ]);
    }
}


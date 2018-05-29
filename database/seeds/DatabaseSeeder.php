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
        $this->call(ClaTableSeeder::class);
        $this->call(TipoHeroiTableSeeder::class);
        $this->call(EspecialidadeTableSeeder::class);
    }
}

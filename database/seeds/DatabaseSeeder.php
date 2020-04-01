<?php

use Illuminate\Database\Seeder;
use App\Model\Person;
use App\Model\Unity;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        factory(Unity::class, 8)->create();
        factory(Person::class, 20)->create();

    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyagerThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Don't add data if the data is already there
        if (DB::table('voyager_themes')->count() > 0) {
            return;
        }

        DB::table('voyager_themes')->insert([
            ['name' => 'foo'],
            ['name' => 'bar'],
            ['name' => 'baz'],
        ]);
    }
}

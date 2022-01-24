<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VoyagerThemesTableUnseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Skip if table does not exists.
        if (!Schema::hasTable('voyager_themes')) {
            return;
        }

        DB::table('voyager_themes')
            ->whereIn('name', ['foo', 'bar', 'baz'])
            ->delete();
    }
}

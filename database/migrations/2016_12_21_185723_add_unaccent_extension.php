<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnaccentExtension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (config('database.default') == 'pgsql') {
            \DB::statement("CREATE EXTENSION IF NOT EXISTS unaccent");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (config('database.default') == 'pgsql') {
            \DB::statement("DROP EXTENSION IF EXISTS unaccent");
        }
    }
}

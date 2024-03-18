<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToGebruikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gebruikers', function (Blueprint $table) {
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('mobiel');
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('opmerkingen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gebruikers', function (Blueprint $table) {
            $table->dropColumn('voornaam');
            $table->dropColumn('achternaam');
            $table->dropColumn('mobiel');
            $table->dropColumn('email');
            $table->dropColumn('adres');
            $table->dropColumn('postcode');
            $table->dropColumn('plaats');
            $table->dropColumn('opmerkingen');
        });
    }
}


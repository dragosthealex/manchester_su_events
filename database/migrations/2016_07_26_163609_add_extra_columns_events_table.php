<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraColumnsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function(Blueprint $table) {
            $table->date('date_start');
            $table->date('date_end')->nullable()->default(NULL);
            $table->string('time_start', 15);
            $table->string('time_end', 15);
            $table->string('price', 50)->nullable()->default(NULL);
            $table->string('location_address', 200)->nullable();
            $table->string('location_name', 200)->nullable();
            $table->string('tickets_link', 200);
            $table->boolean('featured')->default(FALSE);
            $table->string('subtitle', 100)->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function(Blueprint $table) {
            $table->dropColumn('date_start');
            $table->dropColumn('date_end');
            $table->dropColumn('time_start');
            $table->dropColumn('time_end');
            $table->dropColumn('price');
            $table->dropColumn('location_address');
            $table->dropColumn('location_name');
            $table->dropColumn('tickets_link');
            $table->dropColumn('featured');
            $table->dropColumn('subtitle');
        });
    }
}

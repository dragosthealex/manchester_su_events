<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_tags', function(Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
        Schema::table('photos', function(Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
        });
        Schema::table('events', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('event_categories')->onDelete('set null');
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('set null');
            $table->string('cover', 200)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_tags', function(Blueprint $table) {
            $table->dropForeign(['event_id']);
            $table->dropForeign(['tag_id']);
        });
        Schema::table('photos', function(Blueprint $table) {
            $table->dropForeign(['event_id']);
        });
        Schema::table('events', function(Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['creator_id']);
            $table->dropColumn('cover');
        });
    }
}

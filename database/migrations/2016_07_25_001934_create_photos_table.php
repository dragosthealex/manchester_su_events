<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('position')->nullable();
			$table->boolean('slider')->nullable();
			$table->string('filename', 255);
			$table->string('name', 255)->nullable();
			$table->text('description')->nullable();
			$table->unsignedInteger('event_id')->unsigned()->nullable();
			$table->boolean('event_cover')->nullable();
			$table->timestamps();
      $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos');
	}

}

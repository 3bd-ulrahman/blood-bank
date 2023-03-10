<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('province_id')->unsigned();
			$table->string('name', 25);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}
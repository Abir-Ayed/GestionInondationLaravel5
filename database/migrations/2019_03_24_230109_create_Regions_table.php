<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionsTable extends Migration {

	public function up()
	{
		Schema::create('Regions', function(Blueprint $table) {
			$table->increments('id_region');
			$table->string('nom', 100);
			$table->double('longitude');
			$table->double('latitude');
			$table->integer('id_pluviometrie')->unsigned();
			$table->integer('id_prevision')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Regions');
	}
}
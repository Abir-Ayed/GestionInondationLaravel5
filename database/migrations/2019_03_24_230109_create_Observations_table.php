<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObservationsTable extends Migration {

	public function up()
	{
		Schema::create('Observations', function(Blueprint $table) {
			$table->increments('id_observ');
			$table->String('etat');
			$table->String('photo');
			$table->String('name');
			$table->longText('description');
            $table->integer('d_user')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Observations');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluviometriesTable extends Migration {

	public function up()
	{
		Schema::create('Pluviometries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('station');
			$table->double('Pluvio_du_jour');
			$table->date('Date');
			$table->double('Cumul_du_mois');
		});
	}

	public function down()
	{
		Schema::drop('Pluviometries');
	}
}
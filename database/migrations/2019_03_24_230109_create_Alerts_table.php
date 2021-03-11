<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertsTable extends Migration {

	public function up()
	{
		Schema::create('Alerts', function(Blueprint $table) {
			$table->increments('id_alert');
			$table->longText('description');
			$table->string('niveau_risque');
		});
	}

	public function down()
	{
		Schema::drop('Alerts');
	}
}
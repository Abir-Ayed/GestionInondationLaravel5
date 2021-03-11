<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConseilsTable extends Migration {

	public function up()
	{
		Schema::create('Conseils', function(Blueprint $table) {
			$table->increments('id_conseil');
			$table->string('objet');
			$table->string('periode');
			$table->longText('description');
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('Conseils');
	}
}
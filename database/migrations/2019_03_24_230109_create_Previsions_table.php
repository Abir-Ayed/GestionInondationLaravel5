<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrevisionsTable extends Migration {

	public function up()
	{
		Schema::create('Previsions', function(Blueprint $table) {
			$table->increments('id');
			$table->float('qte_pluie');
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('Previsions');
	}
}
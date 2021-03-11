<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarragesTable extends Migration {

	public function up()
	{
		Schema::create('Barrages', function(Blueprint $table) {
			$table->increments('id_barrage');
			
			$table->string('Nom_Fr', 100);
			$table->double('stock', 100);
			$table->double('apports');
			$table->double('lachers');
			$table->date('Date');
			$table->float('Bassin_versant');
			$table->double('Latitude');
			$table->double('Longitude');
			$table->double('Cap_tot_act');
			$table->integer('id_region')->unsigned();
		 
		});
	}

	public function down()
	{
		Schema::drop('Barrages');
	}
}
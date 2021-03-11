<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Barrages', function(Blueprint $table) {
			$table->foreign('id_region')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Barrages', function(Blueprint $table) {
			$table->dropForeign('Barrages_id_region_foreign');
		});
	}
}
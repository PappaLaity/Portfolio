<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormationTable extends Migration {

	public function up()
	{
		Schema::create('Formation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->date('DebutFormation');
			$table->date('finFormation');
			$table->string('description');
			$table->string('diplome');
		});
	}

	public function down()
	{
		Schema::drop('Formation');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienceTable extends Migration {

	public function up()
	{
		Schema::create('Experience', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('debut');
			$table->string('fin');
			$table->string('nomEntreprise');
			$table->string('linkEntreprise');
			$table->string('outils');
			$table->string('profil');
		});
	}

	public function down()
	{
		Schema::drop('Experience');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillTable extends Migration {

	public function up()
	{
		Schema::create('Skill', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('outil');
			$table->string('version');
			$table->string('language');
		});
	}

	public function down()
	{
		Schema::drop('Skill');
	}
}
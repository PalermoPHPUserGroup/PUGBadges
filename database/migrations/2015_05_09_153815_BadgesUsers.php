<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BadgesUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('badge_user', function(Blueprint $table)
		{
			$table->smallInteger('id')->index()->unsigned;
			$table->smallInteger('badge_id');
			$table->smallInteger('user_id');
			$table->timestamps();
			$table->index('badge_id');
			$table->index('user_id');
			$table->unique(['user_id','badge_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

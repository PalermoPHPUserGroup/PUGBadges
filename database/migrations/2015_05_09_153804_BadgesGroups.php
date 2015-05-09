<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BadgesGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('badge_group', function(Blueprint $table)
		{
			$table->smallInteger('id')->index()->unsigned;
			$table->smallInteger('badge_id');
			$table->smallInteger('group_id');
			$table->timestamps();
			$table->index('badge_id');
			$table->index('group_id');
			$table->unique(['badge_id','group_id']);

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

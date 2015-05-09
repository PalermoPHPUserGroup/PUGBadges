<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupsUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_user', function(Blueprint $table)
		{
			$table->smallInteger('id')->index()->unsigned;
			$table->smallInteger('group_id');
			$table->smallInteger('user_id');
			$table->timestamps();
			$table->index('group_id');
			$table->index('user_id');
			$table->unique(['group_id','user_id']);
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

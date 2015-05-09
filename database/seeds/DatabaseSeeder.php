<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Badge;
use App\Group;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		// create a group
		DB::table('groups')->delete();
		Group::create(['name'=>'Local User Group']);

		// create a few badges
		DB::table('badges')->delete();
		Badge::create(['name'=>'Meeting','path'=>'badges/meeting.png']);
		Badge::create(['name'=>'Talk','path'=>'badges/conference.png']);
		Badge::create(['name'=>'Conference','path'=>'badges/conference.png']);
		Badge::create(['name'=>'Three Meetings']);
		Badge::create(['name'=>'Repository Contribution']);
		Badge::create(['name'=>'User Group Blogger']);
		Badge::create(['name'=>'User Group Website Contribution']);

		// create a user
		DB::table('users')->delete();
		$leader = new User;
		$leader->email = 'leader@usergroup.org';
		$leader->is_admin = 1;
		$leader->password = Hash::make('secret');
		$leader->save();

		$member = new User;
		$member->email = 'member@usergroup.org';
		$member->is_admin = 0;
		$member->password = Hash::make('secret');
		$member->save();

		DB::table('group_user')->delete();
		$leader->groups()->attach(1);
		$member->groups()->attach(1);

		DB::table('badge_user')->delete();
		$member->badges()->attach(1);
		$member->badges()->attach(5);


	}

}

<?php namespace App\Commands;

use App\Commands\Command;

use App\Events\BadgeAssignedEvent;
use Illuminate\Contracts\Bus\SelfHandling;
use App\User;
use App\Badge;


class AssignBadgeCommand extends Command implements SelfHandling {
	public $user;
	public $badge;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(User $user, Badge $badge)
	{
		$this->user = $user;
		$this->badge = $badge;

	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		$this->user->badges()->attach($this->badge->id);
		event(new BadgeAssignedEvent($this->user, $this->badge));
	}

}

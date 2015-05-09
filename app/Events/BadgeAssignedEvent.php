<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;
use App\User;
use App\Badge;

class BadgeAssignedEvent extends Event {

	use SerializesModels;
	public $user;
	public $badge;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(User $user, Badge $badge)
	{
		$this->user = $user;
		$this->badge = $badge;

	}

}

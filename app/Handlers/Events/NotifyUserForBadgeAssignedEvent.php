<?php namespace App\Handlers\Events;

use App\Events\BadgeAssignedEvent;
use App\User;
use App\Badge;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Mail;

class NotifyUserForBadgeAssignedEvent {

	public $badge;
	public $user;
	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct(User $user,Badge $badge)
	{
		$this->user = $user;
		$this->badge = $badge;
	}

	/**
	 * Handle the event.
	 *
	 * @param  BadgeAssignedEvent  $event
	 * @return void
	 */
	public function handle(BadgeAssignedEvent $event)
	{
		Mail::send('emails.badge-earned', [ 'badge' => $event->badge->name, 'name'=>$event->user->name ], function($message)
		{
			$message->to('chrispecoraro@gmail.com', 'Chris Pecoraro')->subject('You\'ve earned a badge');
		});
	}

}

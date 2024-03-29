<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VideoAction implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $action;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($action,$user)
    {
        //
        $this->action = $action;
        $this->user = $user->only(['id', 'name', 'image', 'banner' , 'banner_effect']);
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
       
        return new PresenceChannel('videoactionroom.'. $this->action['room']);
    }
}

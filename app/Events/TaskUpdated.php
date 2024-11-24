<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TaskUpdated implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $updatedAt;

    public function __construct($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function broadcastOn()
    {
        return new Channel('tasks');
    }
}

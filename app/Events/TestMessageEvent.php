<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class TestMessageEvent implements ShouldBroadcastNow
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function broadcastOn()
    {
        return [
            new Channel('channel.' . $this->data['session']),
        ];
    }

    public function broadcastAs(): string
    {
        return 'test.message';
    }
}
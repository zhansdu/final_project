<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Connection implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $connected;

    public $name;
    public $department;
    public $mail;
    public $token;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->connected = $data['connected'];
        
        $this->name = $data['name'];
        $this->department = $data['department'];
        $this->mail = $data['mail'];
        $this->token = $data['token'];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['connection'];
    }
}

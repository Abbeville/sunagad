<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Basket\Basket;

class OrderWasCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;
    public $basket;
    public $transaction_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($order, Basket $basket, $transaction_id)
    {
        $this->order = $order;
        $this->basket = $basket;
        $this->transaction_id = $transaction_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

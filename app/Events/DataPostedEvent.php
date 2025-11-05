<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use Carbon\Carbon;

// class DataPostedEvent
class DataPostedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $post;
    public $data_post;
    // private $data_post;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    // public function __construct(array $post)
    // public function __construct(array $data_post)
    public function __construct(array $data_post)
    {
        //
        // $this->post=$post;
        $this->data_post=$data_post;
    
        // $data_post['topic'];
        // $data_post['item'];
        // $data_post['name'];
        // $data_post['data_value'];

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return new Channel('chan-demo');
    }

    public function broadcastWith()
    {
        
        // let str = 'Geeks for Geeks'
        // let array = str.split("for");

        // $thetime=Carbon::now()->isoFormat('Y_MM_DD-HH:mm:ss');
        $thetime=Carbon::now()->isoFormat('Y_MM_DD-HH:mm');

        return [
                            // // 'titre' => $this->data_post['name']
                            // // // 'datapost' => $this->data_post['name']
                            
                            // 'data_post' => $this->data_post
                            
                            // // 'data_name' => $this->data_post['name'],
                            // 'data_name' => $this->data_post['name'].'-'.Carbon::now()->parse(),

            // 'data_name' => $this->data_post['name'].'-'.$thetime,
            // 'data_name' => $this->data_post['name'].'-'.$this->data_post['data_time'],
            // 'data_name' => $this->data_post['name'].'-NEW-'.$this->data_post['data_time'],
            'data_name' => $this->data_post['name'],

            // // 'data_time' => $this->data_post['data_time'],
            // 'data_time' =>$this->data_post['data_time'].'-()-'.$thetime,
            'data_time' =>$thetime,

            
                    // // 'data_value' => $this->data_post['data_value']
                    // 'data_value' =>  $this->data_post['data_value'].split('=>')
                    // 'data_value' =>  'state=>15'.split('=>')

                    
                    // // 'data_value' =>  explode(" ", "Geeks for Geeks")
                    // 'data_value' =>  explode("=>",$this->data_post['data_value'])
            'data_value' =>  explode("=>",$this->data_post['data_value'])[1]


            // 'data_value' =>  $this->data_post['data_value'].split('=>')[1]
        ];
    }
}

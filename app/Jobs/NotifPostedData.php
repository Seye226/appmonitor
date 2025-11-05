<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Notifications\Notification;

use App\Events\DataPostedEvent;
use App\Events\DataSecPostedEvent;

class NotifPostedData implements ShouldQueue
// class NotifPostedData extends Notification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
            // use Queueable;

    /**
     * Create a new job instance.
     *
     * @return void
     */

     private $the_data;


    public function tags(){

        return ['notif_the_data', "notif_the_data:{$this->the_data['name']}", "notif_the_data:{$this->the_data['name']}:{$this->the_data['data_value']}"];
        // return ['save_the_data', "save_the_data:{$this->the_data['name']}", "save_the_data:{$this->the_data['name']}:{$this->the_data['data_value']}:{$this->the_data['data_time']}"];

    }
    

    // public function __construct()
    public function __construct($the_data)
    {
        //
        $this->the_data=$the_data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // dd('hey!!');
        //
// sleep(20);

$siteref=$this->the_data["siteref"];

                // $topic="topic";
                $topic=$this->the_data["topic"];
                // $item="item";
                $name=$this->the_data["name"];
                // $name="name";
                $item=$this->the_data["item"];

                    //     // $data_value=23;
                    //     // $data_value="23 n/";
                    //     // $data_value=['hey',23];
                    // $data_value="state=>23";
                $data_value=$this->the_data["data_value"];

                // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value]);

                // // event($event);
                // broadcast($event)->toOthers();


        $data_time=$this->the_data["data_time"];
        // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);

        // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);
        $event = new DataPostedEvent(['siteref'=>$siteref, 'topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);

        // $eventbis = new DataSecPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);
        $eventbis = new DataSecPostedEvent(['siteref'=>$siteref, 'topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);


        event($event);
        // broadcast($event)->toOthers();

        event($eventbis);
        // broadcast($eventbis)->toOthers();


    }



    public function test(){
        // dd("hello-test");

        // sleep(20);
        
        // $topic="topic";
        // $item="item";
        // $name="name";
        // $data_value=23;
        // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value]);
       
        
        // // event($event);
        // broadcast($event)->toOthers();


    }


    public function notif_the_data(){

        //     public function save_the_data(){
        //         // dd("hello-save_the_data");
        //         // sleep(20); 
                
        //         // dd('hey!!');
        //         //
        // // sleep(20);

                // $topic="topic";
                $topic=$this->the_data["topic"];
                // $item="item";
                $name=$this->the_data["name"];
                // $name="name";
                $item=$this->the_data["item"];

                    //     // $data_value=23;
                    //     // $data_value="23 n/";
                    //     // $data_value=['hey',23];
                    // $data_value="state=>23";
                $data_value=$this->the_data["data_value"];

                // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value]);

                // // event($event);
                // broadcast($event)->toOthers();


        $data_time=$this->the_data["data_time"];
        // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);

        $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);

        $eventbis = new DataSecPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);


        // event($event);
        broadcast($event)->toOthers();

        broadcast($eventbis)->toOthers();



    }




}

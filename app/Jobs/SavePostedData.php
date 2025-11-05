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

use App\Models\Site;
use App\Models\PostedData;

class SavePostedData implements ShouldQueue
// class SavePostedData extends Notification implements ShouldQueue
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
// 'siteref'=>$siteref
        return ['save_the_data', "save_the_data:{$this->the_data['name']}", "save_the_data:{$this->the_data['name']}:{$this->the_data['data_value']}"];
        // // return ['save_the_data', "save_the_data:{$this->the_data['name']}", "save_the_data:{$this->the_data['name']}:{$this->the_data['data_value']}:{$this->the_data['data_time']}"];

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

        $this->save_function_data();
        return;
        
//         // dd('hey!!');
//         //
// // sleep(20);

//                 // $topic="topic";
//                 $topic=$this->the_data["topic"];
//                 // $item="item";
//                 $name=$this->the_data["name"];
//                 // $name="name";
//                 $item=$this->the_data["item"];

//                     //     // $data_value=23;
//                     //     // $data_value="23 n/";
//                     //     // $data_value=['hey',23];
//                     // $data_value="state=>23";
//                 $data_value=$this->the_data["data_value"];

//                 // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value]);

//                 // // event($event);
//                 // broadcast($event)->toOthers();


//         $data_time=$this->the_data["data_time"];
//         // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);

//         $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);

//         $eventbis = new DataSecPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);


//         event($event);
//         // broadcast($event)->toOthers();

//         event($eventbis);
//         // broadcast($eventbis)->toOthers();


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


    // public function save_the_data(){
    private function save_function_data(){
        // dd("hello-save_the_data");
        // sleep(20); 
        
        // dd('hey!!');
        //
// sleep(20);
// return;


$siteref=$this->the_data["siteref"];
$site_id = Site::where('reference', $siteref)->first()->id;
// dd("from SavePostedData Job - site_id: ".$site_id);


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

        //         // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value]);

        //         // // event($event);
        //         // broadcast($event)->toOthers();


        $data_time=$this->the_data["data_time"];

        //---------------

            // // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);

            // $event = new DataPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);

            // $eventbis = new DataSecPostedEvent(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,"data_time"=>$data_time]);


            // // event($event);
            // broadcast($event)->toOthers();

            // broadcast($eventbis)->toOthers();

        //---------------

            $output1by = explode("T", $data_time);
            // dd("output1by",$output1by);
            $output1by2 = explode(".", $output1by[1]);
            $outputVal = explode("=>", $data_value);


            if ($site_id != null) {

                $postedData=PostedData::where('mqtt_name',$name)
                        // ->where('date',$outputb[5])
                ->where('site_id',$site_id)

                ->where('date',$output1by[0])

                        // ->where('time',$output1[0])
                ->where('time',$output1by2[0])

                        // ->where('value',$outputVal[0])
                // ->where('value',$outputVal[1])

                ->first();


                if (!$postedData) {
                // if (!$postedData && $site_id != null) {
                    // dd("on est dans le IF-PostedData!!");
                    
                    $postedData=PostedData::create([


                'site_id'=>$site_id,
                        
                                        // 'yymmdd_HHmmSS'=>$outputb[5]."-".$output1[0],
                                        // 'mqttmodel_id'=>$mqttmodel->id,
                                        //     'hour'=>,
                                        //     'min'=>,
                                        //     'sec'=>,
                                        //     'value'=>$outputVal[0],


                                // 'mqtt_name'=>$outputb[3],
                        'mqtt_name'=>$name,

                                // 'yymmdd_HHmmSS'=>$outputb[5]."-".$output1[0],

                                // 'date'=>$outputb[5],
                        'date'=>$output1by[0],
                        
                                // 'time'=>$output1[0],
                        'time'=>$output1by2[0],

                        //         // 'value'=>$outputVal[0],
                        'value'=>$outputVal[1],


                    ]);
                }


            }

            dd("postedData",$postedData);

        //---------------










    }




}

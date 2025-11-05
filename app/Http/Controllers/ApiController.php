<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function getSites()
    {
        $sites = \App\Models\Site::all();
        return response()->json($sites);
    }
    
    public function getSite($id)
    {
        $site = \App\Models\Site::find($id);
        if ($site) {
            return response()->json($site);
        } else {
            return response()->json(['message' => 'Site not found'], 404);
        }
    }

    public function searchSites(Request $request)
    {
        $query = $request->input('query');
        $sites = \App\Models\Site::where('description', 'like', '%' . $query . '%')
            ->orWhere('reference', 'like', '%' . $query . '%')
            ->orWhere('localisation', 'like', '%' . $query . '%')
            ->get();

        return response()->json($sites);
    }
  
    // public function index($topic,$item,$name,$data_value,$data_time){
    public function index($siteref,$topic,$item,$name,$data_value,$data_time){

        // dd("hii ici");
        // dd(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value]);


            // $savePostedData= \App\Jobs\SavePostedData::dispatch(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);
        $savePostedData= \App\Jobs\SavePostedData::dispatch(['siteref'=>$siteref,'topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);
            // $notifPostedData=\App\Jobs\NotifPostedData::dispatch(['topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);
        $notifPostedData=\App\Jobs\NotifPostedData::dispatch(['siteref'=>$siteref,'topic'=>$topic,'item'=>$item,'name'=>$name,'data_value'=>$data_value,'data_time'=>$data_time]);
        return;


    }

    public function receiveSiteRecords($id) 
    // public function receiveSiteRecords(Request $request, $id)
    {
        $site = \App\Models\Site::find($id);
        $template = \App\Models\Template::find($id);

        if ($site) {

            $recorded = \App\Models\Recorded::find($id);

            if ($recorded) {
                
                return response()->json(['message' => 'Archigen updated successfully']);
            } else {
                
                // create new Recorded instance
                $recorded = new \App\Models\Recorded();

                $recorded->site_id = $site->id;
                $recorded->template_id = $template->id;

                $recorded->save();

            }


            $archive = \App\Models\Archive::find($id);
            $archive = \App\Models\Archive::find($id);
            
            if ($archive) {
                # code...
            }else{
                // create new Archive instance
                $recorded = new \App\Models\Recorded();
            }
            $archive->archigen = $request->input('archigen');
            $archive->Recorded = $request->input('archigen');

            $archive->save();


            return response()->json(['message' => 'Recorded updated successfully']);
        } else {
            return response()->json(['message' => 'Site not found'], 404);
        }
    }

}

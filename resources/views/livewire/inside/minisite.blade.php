    <!-- <div class="border-4 border-gray-500 ..."> -->
    <!-- <div class="bg-green-500 p-6 lg:p-8 border-4 border-yellow-200"> -->
<!-- <div class="bg-green-200 p-6 lg:p-8 border-4 border-yellow-200"> -->
        <!-- <div class="bg-stone-500 p-6 lg:p-8 border-4 border-yellow-200"> -->
    <!-- <div class="bg-stone-100 p-6 lg:p-8 border-4 border-yellow-200"> -->
<div class="bg-green-200 p-3 lg:p-5 border-4 border-yellow-200">


    <h1 class="border-b-4 border-b-gray-500 m-2 text-gray-500 text-sm leading-relaxed">
        (Mini-View)-Site: {{$mini_site->id}}
    <!-- </h1> -->
    <!-- <h1> -->
        - mini-site-TYPE: {{$type}}

        <p class="text-red-500" style="display: flex;">

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-{{$icon_sub_size}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                </svg>
            </span>

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-{{$icon_sub_size}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            </span>

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-{{$icon_sub_size}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>

            </span>

        </p>
    </h1>
    
    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
        

        <div class="border-4 border-indigo-500 ...">

            <p>
                {{ $mini_site->id }} - Nb_PostedDatas:{{ $mini_site->postedDatas->count() }}
            </p>

            <p>
                client: {{$mini_site->client_id}}
                @if($mini_site->client_id != null && $mini_site->client_id != 3 && $mini_site->client() != null)
                    {{ $mini_site->client->firstname }} 
                    {{ $mini_site->client->lastname }} 
                    {{ $mini_site->client->pseudo }} 

                @else
                    null
                @endif
            </p>

        </div>

                    <!-- <div class="border-4 border-indigo-500 md:flex sm:grid-row"> -->
                <!-- <div class="border-4 border-indigo-500 md:flex sm:flex-wrap justify-items-center"> -->
                    <!-- <div class="border-4 border-indigo-500 grid-row content-start justify-items-stretch ..."> -->
                <!-- <div class="border-4 border-indigo-500 md:flex sm:flex-wrap content-start justify-items-stretch ..."> -->
            <!-- <div class="border-4 border-indigo-500 grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4"> -->
        <!-- <div class="border-4 border-indigo-500 grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-2"> -->
        <!-- <div class="border-4 border-indigo-500 md:flex sm:flex-wrap content-start justify-items-stretch ..."> -->
        <div class="border-4 border-indigo-500 md:flex sm:flex-wrap items-center">


            @foreach($data_points as $data_point)
                                    <!-- <div class="border-4 border-green-100"> -->
                                <!-- <div class="border-4 border-green-100 min-w-50"> -->
                                <!-- <div class="border-4 border-green-100 min-w-sm"> -->
                                    <!-- <div class="border-4 border-green-100 min-w-4/4"> -->
                            <!-- <div class="border-4 border-green-100 lg:max-w-1/4 md:max-w-2/4"> -->
                                    <!-- <div class="border-4 border-green-100 min-w-2/4"> -->
                                    <!-- <div class="border-4 border-green-100 min-w-1/4"> -->
                <!-- <div class="border-4 border-green-100 lg:max-w-1/4 md:max-w-2/4 min-w-32"> -->
                        <!-- <div class="border-4 border-green-100 lg:max-w-42 md:max-w-32 min-w-22"> -->
                    <!-- <div class="border-4 border-green-100 min-w-22"> -->
                <!-- <div class="border-4 border-green-100 lg:w-1/4 md:w-2/4 min-w-42"> -->
            <!-- <div class="border-4 border-green-100 lg:max-w-1/4 md:max-w-2/4 min-w-42"> -->
            <div class="border-4 border-green-100 lg:max-w-1/4 md:max-w-2/4 min-w-42 flex-1">
            <!-- <div class="border-4 border-green-100 lg:max-w-1/4 md:max-w-2/4 min-w-42 md:flex-1"> -->


                <!-- <h4 class="border-2 border-green-500 flex gap-6"> -->
                <h4 class="border-2 border-green-500 flex flex-wrap gap-3">



                    <p>
                        <svg class="bi d-block mx-auto mb-1" width="{{$icon_model_size}}" height="{{$icon_model_size}}"><use xlink:href="#{{$data_point}}"/></svg>
                    </p>
                    
                    <p class="grid">
                        <strong>{{$data_point}}:</strong>
                        <small>
                            (Nb_PostedDatas: <strong>{{ $mini_site->postedDatas->where('mqtt_name', $data_point)->count() }}</strong>)
                        </small>
                    </p>
                </h4>

                <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first() ) --}}</p>

                <div class="border-2 border-green-500 ...">
                @if($mini_site->postedDatas->where('mqtt_name', $data_point)->count() > 0)


                    <div style="margin: 5px;padding: 5px;" class="bg-red-100 p-1 rounded-lg">
                        <small>

                            Actualisé il y'a :
                                                    <strong>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->time ) --}}</strong>
                                            <strong>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time ) --}}</strong>
                                            <strong>{{-- \Carbon\Carbon::now() --}}</strong>
                                            <strong>{{-- \Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time ) --}}</strong>
                                    <strong>{{-- \Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time )->diffForHumans() --}}</strong>

                            <strong>{{-- $site_topic_status=\Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time )->diffForHumans() --}}</strong>

                            <strong style="display:none;">{{$site_topic_status=\Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time )}}</strong>
                            <strong>{{$site_topic_status->diffForHumans()}}</strong>
 
                        </small>
                    </div>


                                <!-- div style="display: flex;" -->
                                <!-- <div style="display: flex; md:display: flow;"> -->
                    <div class="{{ $type === 'sites' ? 'xl:flex xl:flex-row ld:flex-col' : '' }}">
                        
                        HY-HEY-A-VOIR!

                    </div>
                    <!-- <div class="xl:flex xl:flex-row ld:flex-col"> -->
                            <!-- <div class="inline-grid"> -->
                            <!-- <div class="inline-flex"> -->
                            <!-- <div class="flex"> -->
                    <!-- <div class="flex" style="flex-flow: wrap;"> -->
                        <!-- <div class="flex md:inline-flex"> -->

                    <!-- <div class="flex flex-nowrap"> -->
                    <div class="flex flex-wrap">
                    <!-- <div class="flex flex-wrap md:flex-wrap-reverse ..."> -->


                        <!-- <div class="flex flex-row @md:flex-col"> -->
                        <!-- </div> -->
                        <!-- <div class="flex flex-row min-[320px]:flex-col"> -->

                        <!-- inline-flex items-baseline -->
                    <!-- <div class="grid grid-cols-3 grid-rows-3 gap-4"> -->
                    <!-- <div class="grid grid-cols-3 grid-rows-3"> -->
                    <!-- <div class="grid grid-cols-3"> -->


                        <!-- <div style="margin: 5px;padding: 5px;"> -->
                        <div class="m-2 p-2">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first() ) --}}</p>
                            <!-- <div class="bg-red-100 p-1 rounded-lg w-4"> -->
                            <div class="{{ $site_topic_status->diffInMinutes()>=10 ? 'bg-yellow-100' : 'bg-green-100'}} p-1 rounded-lg">
                                i-
                                {{$site_topic_status->diffForHumans()}}
                            </div>
                        </div>

                        <div class="m-2 p-2">
                            <p>{{-- $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->id  --}}</p>
                            <p>
                                Id:
                                <small>
                                {{ $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->id }}
                                </small>
                            </p>
                        </div>

                        <div class="m-2 p-2">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->value ) --}}</p>
                            <p>
                                Value:
                                <strong>
                                {{ $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->value }}
                                </strong>
                            </p>
                        </div>

                        <div class="m-2 p-2">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->date ) --}}</p>
                            <p> Le 
                                <small>
                                {{ $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date }}
                                </small>
                            </p>
                        <!-- </div> -->

                        <!-- <div class="m-2 p-2"> -->
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->time ) --}}</p>
                            <p> à 
                                <!-- <small> -->
                                {{ $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time }}
                                <!-- </small> -->
                            </p>
                        </div>

                    </div>


                @else
                    <p>No Posted Data for grid_power</p>
                @endif
                </div>

            </div>
            @endforeach

        </div>

        <div class="border-4 border-indigo-500 ...">

            <p>
                Status:
                    Online|Offline - il y'a une 5 minutes
                Details:
                    Grid =
                    PV =
                    Baterie =
                    Load =
            </p>

        </div>


    </p>



</div>

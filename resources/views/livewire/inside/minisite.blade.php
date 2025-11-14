<div class="border-4 border-gray-500 ...">

    <h1 class="border-b-4 border-b-gray-500 m-2 text-gray-500 text-sm leading-relaxed">
        (Mini-View)-Site: {{$mini_site->id}}
    <!-- </h1> -->
    <!-- <h1> -->
        - mini-site-TYPE: {{$type}}
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

        <div class="border-4 border-indigo-500 ...">

            @foreach($data_points as $data_point)
            <p class="border-4 border-green-100">

                <h4 class="border-2 border-green-500 ...">
                    
                    {{$data_point}}:
                    <small>
                        (Nb_PostedDatas: <strong>{{ $mini_site->postedDatas->where('mqtt_name', $data_point)->count() }}</strong>)</p>
                    </small>

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

                            <strong>{{$site_topic_status=\Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time )->diffForHumans()}}</strong>
 
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
                            <div class="bg-red-100 p-1 rounded-lg">
                                i-
                                {{$site_topic_status}}
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

            </p>
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

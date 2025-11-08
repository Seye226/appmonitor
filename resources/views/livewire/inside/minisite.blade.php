<div class="border-4 border-indigo-500 ...">

    <h1>(Mini-View)-Site: {{$mini_site->id}}</h1>

    
    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
        

        <div class="border-4 border-indigo-500 ...">

            <p>
                {{ $mini_site->id }} - Nb_PostedDatas:{{ $mini_site->postedDatas->count() }}
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

                    <div style="display: flex;">

                        <div style="margin: 5px;padding: 5px;">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first() ) --}}</p>
                        </div>

                        <div style="margin: 5px;padding: 5px;">
                            <p>{{-- $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->id  --}}</p>
                            <p>{{ $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->id }}</p>
                        </div>

                        <div style="margin: 5px;padding: 5px;">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->value ) --}}</p>
                            <p>{{ json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->value ) }}</p>
                        </div>

                        <div style="margin: 5px;padding: 5px;">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->date ) --}}</p>
                            <p>{{ json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date ) }}</p>
                        </div>

                        <div style="margin: 5px;padding: 5px;">
                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->time ) --}}</p>
                            <p>{{ json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time ) }}</p>
                        </div>

                        <div style="margin: 5px;padding: 5px;">
                            <small>

                                <p>Actualisé il y'a :</p>
                                            <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->latest()->first()->time ) --}}</p>
                                    <p>{{-- json_encode( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time ) --}}</p>
                                    <p>{{-- \Carbon\Carbon::now() --}}</p>
                                    <p>{{-- \Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time ) --}}</p>
                                <p>{{\Carbon\Carbon::create( $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->date . $mini_site->postedDatas()->where('mqtt_name', $data_point)->orderBy('date', 'desc')->orderBy('time', 'desc')->first()->time )->diffForHumans()}}</p>
                                
                            </small>
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

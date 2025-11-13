<div class="m-3 p-3">


<div class="border-4 border-indigo-500 ...">

    <h1>Hi ici (livewire)-Global-site-ID:{{$site_id}} information!</h1>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="border-4 border-indigo-500 ...">

        <h2>Liste des Posted Datas:</h2>
        <div>
            @foreach($global_site->postedDatas()->orderBy('date', 'desc')->orderBy('time', 'desc')->limit(2)->get() as $postedData)
                <div class="border-4 border-green-500 ...">


                    <!-- {{--<x-compo-plugs.site-posted-data>HI-DATA</x-compo-plugs.site-posted-data>--}} -->
                    <x-compo-plugs::site-posted-data>

                        HI-DATA
                        <div>



                            Posted Data ID: {{$postedData->id}}
                            - {{ $postedData->mqtt_name }}
                            - {{ $postedData->value }}
                            <!-- - - Date: {{-- $postedData->date --}} -->
                            <!-- - - Time: {{-- $postedData->time --}} -->
                            - Timestamp: {{$postedData->created_at}}


                        </div>

                    </x-compo-plugs::site-posted-data>


                </div>
            @endforeach
        </div>




    </div>
    
</div>

</div>

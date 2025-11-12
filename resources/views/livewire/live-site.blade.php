<div>    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1>Hello ici Site Id: {{$siteId}}/{{$site->id}}</h1>
                
                <input type="text" value="Test Input">
                <p>thesearch:{{$thesearch}}</p>

                <h2>Liste des Posted Datas:</h2>
                <div>
                    @foreach($site->postedDatas()->orderBy('date', 'desc')->orderBy('time', 'desc')->limit(2)->get() as $postedData)
                        <div>

                            <x-compo-plugs::site-info>

                                <div>

                                    Posted Data ID: {{$postedData->id}}
                                    - {{ $postedData->mqtt_name }}
                                    - {{ $postedData->value }}
                                    <!-- - - Date: {{-- $postedData->date --}} -->
                                    <!-- - - Time: {{-- $postedData->time --}} -->
                                    - Timestamp: {{$postedData->created_at}}
                                    
                                </div>

                            </x-compo-plugs::site-info>

                        </div>
                    @endforeach
                </div>


                <livewire:inside.chartsite :site_id="$site->id">


                <livewire:inside.globalsite :site_id="$site->id">


            </div>
        </div>
    </div>
</div>

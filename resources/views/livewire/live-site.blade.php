<div class="bg-red-500 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">

                    <h1>Description du Site Id n°:{{$siteId}}</h1>
                
                    <p>
                        Info-site:{{$site->id.' - '.$site->reference.' - '.$site->localisation}}
                    </p>            
                    <p>
                        Client : {{$site->client->id}}
                                - {{ $site->client->firstname }} 
                                - {{ $site->client->lastname }}

                                <small>

                                    - pseudo: {{ $site->client->pseudo }} 
                                    - adresse: {{ $site->client->adresse }} 
                                    - telephone: {{ $site->client->telephone }}

                                </small>

                    </p>
                </div>

                <input type="text" wire:model.live.debounce.300ms="thesearch" placeholder="Test Input">
                <p>thesearch:{{$thesearch}}</p>

                <livewire:inside.minisite :type="'sites'" :mini_site="$site" :wire:key="$site->id.'-live-site-'.time()">

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


                <livewire:inside.plugs.chartsite :site_id="$site->id">


                <livewire:inside.plugs.globalsite :site_id="$site->id">


            </div>
        </div>
    </div>
</div>

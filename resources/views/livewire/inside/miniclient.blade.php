<div class="border-4 border-indigo-500 ...">

    <h1>(Mini-View)-client: {{$mini_client->id}}</h1>

    
    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
        

        <div class="border-4 border-indigo-500 ...">

            <p>
                {{ $mini_client->id }} - Nb_Sites:{{ $mini_client->sites->count() }}
            </p>

        </div>

        <div class="border-4 border-indigo-500 ...">
            
            @foreach($mini_client->sites as $site)

                <h1>{{$site->id .' - '. $site->reference .' - '. $site->localisation}}</h1>
                <p>
                    {{$site->description }}
                </p>
                
                <livewire:inside.minisite :mini_site="$site" :wire:key="$site->id">

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

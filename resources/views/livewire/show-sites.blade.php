<div class="p-6 lg:p-8 bg-white border-b border-gray-200">

    <h1>
        Show-sites-TYPE: {{$type}}
    </h1>

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Liste sites
        <strong>
        @if($client_id)
            du client Id n°: {{$client_id}}
        @else
            accecible à l'utisisateur en cours.
        @endif
        </strong>
        (livewire component)
    </h1>
    <p>
        @if($client_id)
            Nombre de <strong>site(s)</strong> du Client: <strong>{{$sites->count()}}</strong>
        @else
            <p>
                Description de l'utisisateur en cours:
                <br>
                {{ Auth::user()->id .' - '. Auth::user()->name .' - '. Auth::user()->email }}
            </p>

            <p><small>
                (tous clients liée à l'utilisateur en cours & selon le rôle de l'utilisateur en cours)
                <strong>
                    Check-If-Auth()-user IS Supervisor AND If Origin-Supervisor-of-Client/Site
                </strong>
            </small></p>
        @endif
    </p>

    <div class="mt-8 text-2xl font-medium text-gray-900">

        <div>

            <div>
            <h2>Recherche un site (par reference)</h2>
            <input id="{{'st-test'.($client_id??'').'-'.time()}}" wire:model="search" type="text">
            <input id="{{'st-test-bis'.($client_id??'').'-'.time()}}" wire:model.live="search" type="text">

            <input id="{{'st'.($client_id??'').'-'.time()}}" wire:model.live.debounce.300ms="search" type="text">
            <p>Input: {{$search}}</p>
            </div>

            <div>
                searchTermList
                <select wire:model.live.debounce.300ms="searchTerm" name="searchTermSiteName-{{$client_id??''}}" id="searchTermSiteId-{{$client_id??''}}">
                    @foreach($searchTermList as $ct=>$term)
                        <option value="{{$term}}">{{$term}}</option>

                        <!-- <option id="searchTermSiteId-{{-- ($client_id??'').'-'.$ct --}}" value="{{-- $term --}}">{{-- $term --}}</option> -->
                    @endforeach
                </select>

                <p>searchTerm: {{$searchTerm}}</p>
            </div>
        </div>

    </div>


    <h2>Site(s) trouvé(s):</h2>

    <select wire:model.live.debounce.300ms="viewoptionselected" name="viewoption-SS-Name-{{$client_id??''}}" id="viewoption-SS-Id-{{$client_id??''}}">
        @foreach($viewoptions as $optionKey=>$option)
            <option value="{{$optionKey}}">{{$optionKey}}</option>
        @endforeach
    </select>
    viewoptionselected: {{ $viewoptionselected }}

    @if($viewoptionselected == 'Grid')
        <p>Affichage en mode Grid</p>

    @elseif($viewoptionselected == 'List')
        <p>Affichage en mode List</p>

    @else
        <p>Affichage par défaut (Grid)</p>

    @endif


    {{$viewoptions[$viewoptionselected]}}

                    <!-- <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">  -->
                <!-- <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 xl:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">  -->
        <!-- <div class="bg-gray-200 bg-opacity-25 {{-- $viewoptions[$viewoptionselected] --}}"> -->
    <!-- Force List view IF-NOT PAGE-type-Clients-Interface-(URL:/clients) -->
    <div class="bg-gray-200 bg-opacity-25 {{ $type === 'sites' ? $viewoptions[$viewoptionselected] : $viewoptions['List'] }}" >
    <!-- </div> -->
    <!-- <div class="bg-gray-200 bg-opacity-25"> -->

        <!-- <div> -->

                @foreach($sites as $site)
                <div>

                    <div class="flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                        </svg>

                        <h3 class="ms-3 text-xl font-semibold text-gray-900">
                            <a href="{{ route('sites.livesite', $site->id) }}">Site-{{$site->id}} - ref:{{$site->reference}} (Voir details)</a>
                        </h3>

                    </div>

                    <div>

                        <a href="{{ route('sites.livesite', $site->id) }}" class="{{request()->routeIs('sites.livesite') ? 'text-indigo-600 underline' : 'text-gray-600 hover:text-indigo-600'}}">
                            Voir details Site
                        </a>
                        <a href="">Voir archives</a>

                    </div>


<livewire:inside.minisite :type="$type" :mini_site="$site" :wire:key="$site->id.'-'.$viewoptionselected.'-'.time()">



                </div>
                @endforeach

        <!-- </div> -->
            
    </div>

</div>

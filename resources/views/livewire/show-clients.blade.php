<div class="p-6 lg:p-8 bg-white border-4 border-lime-200">
<!-- <div class="bg-gray-300 p-6 lg:p-8 bg-white border-b border-lime-200"> -->

    <h1 class="border-b-4 border-lime-200 mt-8 text-2xl font-medium text-gray-900">Liste clients (livewire component)</h1>

    <div class="mt-8 text-2xl font-medium text-gray-900">

        <div>

            if($supervisor_id!=null)
            endif
            Supervisor View - Recherche un client (par nom)

            <div>
            <h2>Recherche un Client (par nom)</h2>
            <input id="{{'sc-test'.time()}}" wire:model="search" type="text">
            <input id="{{'sc-test-bis'.time()}}" wire:model.live="search" type="text">
<!-- .($supervisor_id??'').'-' -->
            <input id="{{'sc'.time()}}" wire:model.live.debounce.300ms="search" type="text">
            <p>Input: {{$search}}</p>
            </div>

            <div>
                searchTermList
                <select wire:model.live.debounce.300ms="searchTerm" name="searchTerm-SC-Name" id="searchTerm-SC-Id">
                    @foreach($searchTermList as $term)
                        <!-- <option wire:click="setSearchTerm('{{--$term--}}')">{{--$term--}}</option> -->
                        <option value="{{$term}}">{{$term}}</option>
                    @endforeach
                </select>

                <p>searchTerm: {{$searchTerm}}</p>
            </div>
        </div>

    </div>


    <h2>Client(s) trouvé(s):</h2>


    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8"> 

        <!-- <div> -->

                @foreach($clients as $client)
                <!-- <div class="border-4 border-lime-400 flex items-center"> -->
                <div class="border-4 border-lime-400">

                    <div class="flex items-center">

                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                        </svg> -->
                        
                        <div>
                            <!-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1v14m8.336-.479-6.5-5.774a1 1 0 0 1 0-1.494l6.5-5.774A1 1 0 0 1 11 2.227v11.546a1 1 0 0 1-1.664.748Z"/>
                            </svg> -->
                            <!-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill="currentColor" d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z"/>
                                <path fill="#fff" d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z"/>
                            </svg> -->
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z"/>
                            </svg>

                        </div>


                        <h3 class="ms-3 text-xl font-semibold text-gray-900">
                            <a href="{{ route('clients.liveclient', $client->id) }}">Client-{{$client->id}} - ref:{{$client->reference}} (Voir details)</a>
                        </h3>

                    </div>

                    <div>

                        <a href="{{ route('clients.liveclient', $client->id) }}" class="{{request()->routeIs('clients.liveclient') ? 'text-indigo-600 underline' : 'text-gray-600 hover:text-indigo-600'}}">
                            Voir details Client
                        </a>
                        <a href="">Voir archives</a>

                    </div>


        <p>hey uppercase</p>
        <p class="uppercase">hey uppercase</p>
        <div class="md:max-xl:flex">
        <div>
            
        </div>
        </div>

        <h1>Show-clients-TYPE:{{$type}}</h1>
        <livewire:inside.miniclient :type="$type" :mini_client="$client" :wire:key="$client->id">



                </div>
                @endforeach

        <!-- </div> -->
            
    </div>

</div>

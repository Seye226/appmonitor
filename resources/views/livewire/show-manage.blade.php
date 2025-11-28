    <!-- <div class="bg-green-400 p-6 lg:p-8 bg-white border-b border-gray-200"> -->
<!-- <div class="bg-red-200 p-6 lg:p-8 border-4 border-red-500"> -->
    <!-- <div class="bg-red-400 py-12">     -->
<div class="bg-gray-100 p-6 lg:p-8 border-4 border-red-500">
    
    <h1 class="mt-8 text-2xl font-medium text-gray-900">Liste superviseurs (livewire component)</h1>

    <div class="mt-8 text-2xl font-medium text-gray-900">

        <div>

            if($supervisor_id!=null)
            endif
            
            Supervisor View - Recherche un superviseur (par nom)

            
                <!-- <div> -->
            <!-- <div style="display: flex;"> -->
                <!-- <div style="display: inline-flex;"> -->
                <!-- <div style="display: ruby;"> -->
                <!-- <div style="display: -webkit-box;"> -->
                <!-- <div style="display: -webkit-inline-box;"> -->
            <div class="my-3 grid grid-cols-3 divide-x-3 divide-dashed divide-indigo-500">

                <div>
                    <h2>Recherche un Superviseur (par nom)</h2>
        <!-- .($supervisor_id??'').'-' -->
                    <input id="{{'sm'.time()}}" wire:model.live.debounce.300ms="search" type="text">
                </div>

                <div>
                    <h2>searchTermList:</h2>
                    <select wire:model.live.debounce.300ms="searchTerm" name="searchTerm-SM-Name" id="searchTerm-SM-Id">
                        @foreach($searchTermList as $term)
                            <!-- <option wire:click="setSearchTerm('{{--$term--}}')">{{--$term--}}</option> -->
                            <option value="{{$term}}">{{$term}}</option>
                        @endforeach
                    </select>

                    <p>searchTerm: {{$searchTerm}}</p>
                </div>

                
            </div>

            <div>

                <p>Input: {{$search}}</p>

            </div>

        </div>

    </div>


    <h2>Superviseur(s) trouvé(s):</h2>


    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8"> 

        <!-- <div> -->

                @foreach($superviseurs as $superviseur)
                <!-- <div class="bg-red-100 p-6 lg:p-8 border-dotted border-2 border-red-500"> -->
                <div class="bg-gray-200 p-6 lg:p-8 border-dotted border-2 border-red-500">

                    <div class="flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                        </svg>

                        <h3 class="ms-3 text-xl font-semibold text-gray-900">
                            <a href="{{ route('manage.livemanage', $superviseur->id) }}">Superviseur-{{$superviseur->id}} - ref:{{$superviseur->reference}} (Voir details)</a>
                        </h3>

                    </div>

                    <div>

                        <a href="{{ route('manage.livemanage', $superviseur->id) }}" class="{{request()->routeIs('manage.livemanage') ? 'text-indigo-600 underline' : 'text-gray-600 hover:text-indigo-600'}}">
                            Voir details Superviseur
                        </a>
                        <a href="">Voir archives</a>

                    </div>


<p>hey uppercase</p>
<p class="uppercase">hey uppercase</p>
<div class="md:max-xl:flex">
  <div></div>
</div>

<h1>Show-superviseurs-TYPE:{{$type}}</h1>
<!-- livewire:inside.miniclient :type="$type" :mini_client="$superviseur" :wire:key="$superviseur->id"/ -->



                </div>
                @endforeach

        <!-- </div> -->
            
    </div>

</div>

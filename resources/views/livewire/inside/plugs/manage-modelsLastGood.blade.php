<div class="bg-red-300 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">

                    <h1>MANAGE - Liste des {{ $modeltype }} Id </h1>
                
                    <p>
                        {{ucfirst($modeltype)}}s nombre: {{$models->count()}}
                    </p>            
                    <p>
                        <small>Info-detail: </small>


                    </p>
                </div>              



                <div class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <x-nav-link href="{{ route('manage.managecreateview') }}" :active="request()->routeIs('manage.managecreateview')">
                        {{ __('manage.managecreateview-'.$modeltype.'s') }}
                    </x-nav-link>
                </div>

                <div>

                    <div>
                   
                        <x-button wire:click="openModal">
                            AAA-New {{ucfirst($modeltype)}} (openModal)
                        </x-button> 

                        <x-button wire:click="openManageModelModal(null,'Create')">
                            AAA-Créer un nouveau {{ucfirst($modelname)}}
                        </x-button>

                    </div>
                        
                    <div>
                                    
                        <!-- ICI-MODEL pour view des model (eg:client) -->

                        {{--json_encode($manageModelModal)--}}
                        
                        <div>

                            <x-dialog-modal id="manage-view-{{ $modeltype }}-modal" wire:model="pageTypeModelModal">
                                <x-slot name="title">
                                    {{$pageType}} {{ $modeltype }}
                                </x-slot>
                                <x-slot name="content">

                                    dialog-modal-content

                                    dialog-modal-content

                                    <div>


                                        <div>

                                            @if($manageModelModal)
                                                <p>
                                                    {{ucfirst($modeltype)}} Id: {{ json_encode($manageModelModal->getFillable()) }}
                                                </p>

                                                <div>

                                                    @foreach($manageModelModal->getFillable() as $fillable)

                                                    <p>{{$fillable}}</p>

                                                    @endforeach

                                                </div>


                                                <!-- -----DEBUT-le27/11/25-FUSION FORM-UNIVERSEL!!------- -->


                                                @if($pageType === "Edit" || $pageType === "Create" )


                                                    <!-- form action="{{-- route('manage.managecreateview.post', 'frgthy') --}}" method="POST" -->
                                                    <form wire:submit.prevent="submit" action="{{ route('manage.managecreateview.post', 'frgthy') }}" method="POST">

                                                        @csrf

                                                        <p>nom:</p>
                                                        <x-input id="nom" name="nom" wire:model="nom"></x-input>
                                                        @error('nom') <span>{{$message}}</span> @enderror


                                                        <ul>
                                                            foreach($modelInputArray as $modelInput=>$inputValue)
                                                            @foreach($manageModelModal->getFillable() as $modelInput)
                                                            <li class="p-2 m-2 border-1 border-gray-500 bg-gray-300" >
                                                                <p><strong>{{ucfirst($modelInput)}}</strong> :</p>

                                                                <div class="p-2 m-2 border-1 border-gray-500">
                                                                @if( ($pageType === "Edit") && isset($superviseur->id))
                                                                    <x-input id="{{$modelInput}}" name="{{$modelInput}}" wire:model.live.debounce.300ms="modelInputArray.{{$modelInput}}"></x-input>
                                                                    @error('modelInputArray.'.$modelInput) <span class="bg-red-500">{{$message}}</span> @enderror
                                                                @else
                                                                    <x-input id="{{$modelInput}}" name="{{$modelInput}}" wire:model.live="modelInputArray.{{$modelInput}}"></x-input>
                                                                    @error('modelInputArray.'.$modelInput) <span class="bg-red-500">{{$message}}</span> @enderror

                                                                @endif
                                                                </div>

                                                                <p>TEST: {{ isset($modelInputArray[$modelInput]) ? $modelInputArray[$modelInput] : ''}}</p>

                                                            </li>
                                                            @endforeach
                                                        </ul>

                                                        <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                            {{ __('Enregister') }}
                                                        </button>
                                                    </form>

                                                    
                                                @else


                                                    <div>

                                                        <h3>Nom du Model: {{$modelname}}<strong>::Class</strong> </h3>
                                                        @livewire('inside.manage.'.$modelname.'.manage-'.$modelname,[$modelname.'Id'=>$manageModelModal->id, 'pageType'=>$pageType])

                                                    </div>


                                                @endif


                                                <!-- -------END-DEBUT-le27/11/25-FUSION FORM-UNIVERSEL!!------ -->


                                            @else
                                                No {{ucfirst($modeltype)}} Selected
                                            @endif
                                        </div>

                                        <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            {{ __('manage-model-'.$modeltype) }}
                                        </button>



                                    </div>


                                </x-slot>
                                <x-slot name="footer">
                                    {{$pageType}}-{{ $modeltype }}-footer
                                    <x-button wire:click="$toggle('pageTypeModelModal')" wire:loading.attr="disabled">Cancel</x-button>
                                </x-slot>
                                {{ __('manage.manageModel-'.$modeltype.'s') }}
                            </x-dialog-modal>



                        </div>

                        <!-- END- ICI-MODEL pour view des model (eg:client) -->



                        <div>
                            @foreach($models as $model)
                                <div class="p-6 lg:p-8 border-dotted border-2 border-red-500 {{ ($manageModelModal && $manageModelModal->id == $model->id) ? 'bg-green-200' : 'bg-gray-200 ' }}">


                                            {{ json_encode($model) }}
                                            {{ json_encode($model->fillable) }}
                                            {{-- json_encode($model->fillable()) --}}


                                    <div class="flex items-center">

                                        <h3 class="ms-3 text-xl font-semibold text-gray-900">

                                            {{ucfirst($modeltype)}}-{{$model->id}} - Name:{{$model->name}} (Voir details)

                                            <x-button wire:click="openManageModelModal({{$model->id}},'View')">
                                                Details
                                            </x-button>
                                            <x-button wire:click="openManageModelModal({{$model->id}},'Edit')">
                                                Edit
                                            </x-button>

                                        </h3>

                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

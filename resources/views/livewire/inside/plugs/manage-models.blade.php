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



                                                            
                                                            foreach($modelInputArray as $thek=>$thet)
                                                            dd("modelInputArray",$modelInputArray,"thet",$thet)
                                                            <p>$thek .' - '. $thet</p>
                                                            endforeach


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

                                    dialog-modal-content-AAA

                                    dialog-modal-content-NEW
                                    
                                    {{json_encode($manageModelModal)}}

                                    <div>


                                        <div>

                                            if($manageModelModal)
                                                if($modelInputArray)
                                            @if($modelInputArray && $manageModelModal)
                                                <p>
                                                    {{ucfirst($modeltype)}} Id: {{-- json_encode($manageModelModal->getFillable()) --}}
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
                                                            
                                                            {{--dd($modelInputArray,$manageModelModal->getFillable())--}}
                                                            foreach($modelInputArray as $modelInput=>$inputValue)
                                                            @foreach($manageModelModal->getFillable() as $modelInput)
                                                            <li class="p-2 m-2 border-1 border-gray-500 bg-gray-300" >
                                                                <p><strong>{{ucfirst($modelInput)}}</strong> :</p>

                                                                <div class="p-2 m-2 border-1 border-gray-500">
                                                                if( ($pageType === "Edit") && isset($superviseur->id))
                                                                @if( ($pageType === "Edit") && isset($superviseur->id))
                                                                    <x-input id="{{$modelInput}}" name="{{$modelInput}}" wire:model.live.debounce.300ms="modelInputArray.{{$modelInput}}"></x-input>
                                                                    @error('modelInputArray.'.$modelInput) <span class="bg-red-500">{{$message}}</span> @enderror
                                                                @else
                                                                    <x-input id="{{$modelInput}}" name="{{$modelInput}}" wire:model.live="modelInputArray.{{$modelInput}}"></x-input>
                                                                    @error('modelInputArray.'.$modelInput) <span class="bg-red-500">{{$message}}</span> @enderror

                                                                @endif
                                                                </div>

                                                                <p>TEST: {{-- isset($modelInputArray[$modelInput]) ? $modelInputArray[$modelInput] : ''--}}{{json_encode($modelInputArray)}}</p>

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
                                                        @if($manageModelModal)
                                                            @livewire('inside.manage.'.$modelname.'.manage-'.$modelname,[$modelname.'Id'=>$manageModelModal->id, 'pageType'=>$pageType])
                                                        @else
                                                            <p class="bg-yellow-300">dd("HEY dd from manage-models.blade!!: manageModelModal IS NULL")</p>
                                                        @endif
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










                        <!-- ---DEBUT-TEST-1----- -->
                        <div id="myDiv" class="w-48 h-48 bg-blue-500 flex items-center justify-center text-white transition-colors duration-500 ease-in-out">
                            Hey ICI myDiv!!
                        </div>
                            
                        <script>
                            document.addEventListener('DOMContentLoaded', (event) => {

                                var divList=[];

                                const mydiv = document.getElementById('myDiv');

                                setTimeout(() =>{
                                    //Remove the old background color class
                                    myDiv.classList.remove('bg-blue-500');
                                    //Add the new background color class
                                    myDiv.classList.add('bg-red-500');
                                // }, 1000); //1000 milliseconde = 10 secondes
                                }, 10000); //1000 milliseconde = 10 secondes
                            });
                        </script>
                        <!-- ---END-TEST-1----- -->










                        <div>
                            @foreach($models as $model)
                                <div class="p-6 lg:p-8 border-dotted border-2 border-red-500 {{ ($manageModelModal && $manageModelModal->id == $model->id) ? 'bg-green-200' : 'bg-gray-200 ' }}">

                                    <p>
                                        {{ ($manageModelModal && $manageModelModal->id == $model->id) ? 'bg-green-200' : 'bg-gray-200 ' }}
                                    </p>

                                    <script>

                                        // document.addEventListener('DOMContentLoaded', (event) => {
                                        //     // const mydiv = document.getElementById('myDiv');

                                        //     var divList=[];
                                        //     //     // divList[{$model}] =  document.getElementById('myDiv'+ { $model});
                                        //     divList['{{$model->id}}'] =  {{$model->id}};
                                        //     // divList['{{$model->id}}'] =  document.getElementById('myDiv'+ {{$model->id}});
                                            
                                        //     divListChangeInDelay['{{$model->id}}'] =  {{$model->id}};

                                        //     console.log(divList,divList['{{$model->id}}']);
                                        //     console.log(divListChangeInDelay,divListChangeInDelay['{{$model->id}}']);
                                        //     console.log('---------');

                                        //     setTimeout(() =>{
                                        //         //Remove the old background color class
                                        //             // myDiv.classList.remove('bg-blue-500');
                                        //         // myDiv.classList.remove('bg-blue-500');
                                        //         //Add the new background color class
                                        //             // myDiv.classList.add('bg-red-500');
                                        //         // myDiv.classList.add('bg-red-500');
                                        //     // }, 1000); //1000 milliseconde = 10 secondes
                                        //     }, 10000); //1000 milliseconde = 10 secondes

                                        // });
                                    </script>


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

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
                            New {{ucfirst($modeltype)}} (openModal)
                        </x-button> 

                        <x-button wire:click="openManageModelModal(null,'Create')">
                            Créer un nouveau {{ucfirst($modelname)}}
                        </x-button>

                        
                        <div>
                            <!-- x-dialog-modal id="manage-create-{{ $modeltype }}-modal" :title="__('manage.managecreateview-'.$modeltype.'s')" -->
                            <x-dialog-modal id="manage-create-{{ $modeltype }}-modal" wire:model="manageCreateModelModal">
                                <x-slot name="title">
                                    Adding {{ $modeltype }}
                                </x-slot>
                                <x-slot name="content">

                                    dialog-modal-content

                                    <form action="{{ route('manage.managecreateview.post', 'frgthy') }}" method="post">
                                        @csrf

                                        <x-input id="nom" name="nom" wire:model="nom"></x-input>

                                        <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            {{ __('manage-create-'.$modeltype) }}
                                        </button>
                                    </form>


                                </x-slot>
                                <x-slot name="footer">
                                    Adding-{{ $modeltype }}-footer
                                    <x-button wire:click="$toggle('manageCreateModelModal')" wire:loading.attr="disabled">Cancel</x-button>
                                </x-slot>
                                {{ __('manage.managecreateview-'.$modeltype.'s') }}
                            </x-dialog-modal>
                        </div>


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

                                        <x-input id="nom" name="nom" wire:model="nom"></x-input>
                                        <div>

                                            @if($manageModelModal)
                                                <p>
                                                    {{ucfirst($modeltype)}} Id: {{ json_encode($manageModelModal->getFillable()) }}
                                                </p>

                                                <div>

                                                    @foreach($manageModelModal->getFillable() as $fillable)

                                                    <p>{{$fillable}}</p>

                                                    @endforeach

                                                <div>

                                                </div>

                                                    @if($modeltype==="App\Models\UserB")
                                                    <livewire:inside.manage.user.manage-user :key="time()" userId="{{$manageModelModal->id}}" pageType="{{$pageType}}" />
                                                    @elseif($modeltype==="App\Models\ClientB")
                                                    <livewire:inside.manage.client.manage-client :key="time()" clientId="{{$manageModelModal->id}}" pageType="{{$pageType}}" />
                                                    @elseif($modeltype==="App\Models\SiteB")
                                                    <livewire:inside.manage.site.manage-site :key="time()" siteId="{{$manageModelModal->id}}" pageType="{{$pageType}}" />
                                                    @elseif($modeltype==="App\Models\SuperviseurBBB")
                                                    <livewire:inside.manage.superviseur.manage-superviseur :key="time()" superviseurId="{{$manageModelModal->id}}" pageType="{{$pageType}}" />
                                                    @else

                                                    <h3>Nom du Model: {{$modelname}}<strong>::Class</strong> </h3>
                                                    @livewire('inside.manage.'.$modelname.'.manage-'.$modelname,[$modelname.'Id'=>$manageModelModal->id, 'pageType'=>$pageType])

                                                    @endif
                                                </div>
                                            @else
                                                No {{ucfirst($modeltype)}} Selected
                                            @endif
                                        </p>

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

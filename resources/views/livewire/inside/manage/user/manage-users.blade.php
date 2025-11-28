<div class="bg-red-300 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">

                    <h1>MANAGE - Liste des user Id </h1>
                
                    <p>
                        Users nombre: {{$users->count()}}
                    </p>            
                    <p>
                        <small>Info-detail: </small>


                    </p>
                </div>              



                <div class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <x-nav-link href="{{ route('manage.managecreateview') }}" :active="request()->routeIs('manage.managecreateview')">
                        {{ __('manage.managecreateview-users') }}
                    </x-nav-link>
                </div>

                <livewire:inside.plugs.manage-models :modeltype="$modelclass" />

            </div>
        </div>
    </div>
</div>

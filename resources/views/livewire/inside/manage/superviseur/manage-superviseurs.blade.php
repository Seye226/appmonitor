<div class="bg-red-300 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">

                                <button wire:click="openManageCreateUserModal">openManageCreateUserModal</button>


                    <h1>MANAGE - Liste des superviseur</h1>
                
                    <p>
                        Superviseur nombre: {{$superviseurs->count()}}
                    </p>           
                    <p>
                        <small>Info-detail: </small>

                    </p>
                </div>

                <livewire:inside.plugs.manage-models :modeltype="$modelclass" />

            </div>
        </div>
    </div>
</div>

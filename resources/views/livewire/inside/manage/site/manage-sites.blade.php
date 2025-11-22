<div class="bg-red-300 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">


                    <h1>MANAGE - Liste des sites</h1>
                
                    <p>
                        Sites nombre: {{$sites->count()}}
                    </p> 

                    <p>
                        <small>Info-detail: </small>

                    </p>
                </div>

                <livewire:inside.plugs.manage-models :modeltype="'site'" />

            </div>
        </div>
    </div>
</div>

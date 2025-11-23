<div class="bg-red-400 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">


                
                    <h1>Description du superviseur Id n°:{{$superviseurId}}</h1>
                
                    <p>
                        Client: {{$superviseur->id.' - '.$superviseur->firstname.' - '.$superviseur->lastname}}
                    </p>            
                    <p>
                        <small>Info-detail: </small>

                        pseudo: {{ $superviseur->pseudo }} 
                        - telephone: {{ $superviseur->telephone }} 
                        - user_id: {{ $superviseur->user_id }}

                    </p>
                </div>

                <div>

                    <div>

                        <div>
                            
                            <strong>{{ $superviseur->sites->count() }}</strong> sites supervisés:
                            
                        </div>
                        <div>

                            <strong>{{ $superviseur->clients->count() }}</strong> clients crées!:

                        </div>

                    </div>

                </div>

                <div>
                    <livewire:show-sites :superviseur_id="$superviseur->id" :type="'superviseur_manage_page'">

                    <!-- livewire:show-clients :type="'dashbord'"/ -->

                    
                </div>

            </div>

        </div>
    </div>
</div>

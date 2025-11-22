<div class="bg-red-300 py-12">    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="border-4 border-indigo-500 ...">

                    <h1>MANAGE - Description du user Id n°:{{$clientId}}</h1>
                
                    <p>
                        Client: {{$client->id.' - '.$client->firstname.' - '.$client->lastname}}
                    </p>            
                    <p>
                        <small>Info-detail: </small>

                        pseudo: {{ $client->pseudo }} 
                        - adresse: {{ $client->adresse }} 
                        - telephone: {{ $client->telephone }}

                    </p>
                </div>

                <div>

                    <div>
                        <livewire:show-sites :client_id="$client->id">
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

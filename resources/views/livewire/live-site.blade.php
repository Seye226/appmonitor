<div>    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1>Hello ici Site Id: {{$siteId}}/{{$site->id}}</h1>

                <h2>Liste des Posted Datas:</h2>
                <div>
                    @foreach($site->postedDatas as $postedData)
                        <div>

                            Posted Data ID: {{$postedData->id}}
                            - {{ $postedData->mqtt_name }}
                            - {{ $postedData->value }}
                            <!-- - - Date: {{-- $postedData->date --}} -->
                            <!-- - - Time: {{-- $postedData->time --}} -->
                            - Timestamp: {{$postedData->created_at}}

                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

<x-app-layout>
    
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plot Document') }}
        </h2>
    </x-slot>
    <div class="py-12">
     @php
                        $file->plotfiletitle=json_decode($file->plotfiletitle,true);
                        @endphp
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                        <iframe src="{{asset('storage/files/'.$file->plotfiletitle) }}" width="100%" height="600px" ></iframe>
                        </div>
                        </div>
                        </div>

</div>
</x-app-layout>
<x-admin-layout>
    
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plot Images') }}
        </h2>
    </x-slot>
    <div class="container">
    <table class="table  table-responsive ">
    <tr>
@php
                        $images->plotimagetitle=json_decode($images->plotimagetitle,true);
                        $i=0;
                        @endphp

                        @foreach($images->plotimagetitle as $f)     
                        @php $filen=str_replace('"','',$f);@endphp
                        @php 
                        $i++;
                        @endphp

                        <td>
                            <div style=" position:relative;"><img src="{{ asset('storage/photos/'.$f) }}" style=" position:relative;  width:200px; height: 200px;"  >
                        <a class="btn btn-danger" style="margin:10px; position:absolute;  top:-10px; left:151px;" href="/removephoto/{{$images->id}}/{{$f}}">X</a></td>
</div>
                       @php
                       
                       if($i%5==0)
                       {
                       echo("</tr>");
                       echo("<tr>");
                       }
                        @endphp

                        
                        @endforeach
                        <td>
                        <form action="/uploadphotos" method="post" enctype="multipart/form-data"  >
                        @csrf
                        
                        <div class="upload-btn-wrapper" style="  position: relative;
                            overflow: hidden;
                            display: inline-block;">

  
                                        <button class="btn" style="
                                            border: 2px solid gray;
                                            color: gray;
                                            background-color: white;
                                            padding: 8px 20px;
                                            border-radius: 8px;
                                            font-size: 20px;
                                            font-weight: bold;">
                                            <img style="
                                            width:150px; 
                                            height:120px;"
                                            src="https://banner2.cleanpng.com/20180610/eau/kisspng-plus-and-minus-signs-clip-art-5b1d241b5e4aa4.7318136215286364433862.jpg">Add more images
                                        </button>
                                        <input type="file" multiple
                                         style=" font-size: 100px;
                                            position: absolute;
                                            left: 0;
                                            top: 0;
                                            opacity: 0;"name="photo[]" wire:model="photo"/>
                                        </div>
                                        <br>
                                        <button type="submit" name="id" value="{{$images->id}}" class="btn btn-info">Save</button>
             </form>

                        </td>
                        </tr>
    </table>  
    </div>

</x-admin-layout>
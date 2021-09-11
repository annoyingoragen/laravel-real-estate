<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User information') }}
        </h2>
    </x-slot>
    <div class="py-12">

            <table class="table table-bordered w-auto">
                <tr>
                    <!-- <th>No</th> -->
                    <th>Name</th>
                    <!-- <th>Father Name</th> -->
                    <!-- <th>CNIC</th> -->
                    <!-- <th>occupation</th> -->
                    <!-- <th width="580px">telephone</th> -->
                 <th>cellno</th>
                    <!-- <th>mailingaddress</th> -->
                    <!-- <th>permanentaddress</th> -->
                    <!-- <th>age</th> -->
                    
                    <th>plot address</th>
                    <th style="width:9%">registration number</th>
                    <th style="width:10%">price per marla</th>
                    <th>booking date</th>
                    <th > price</th>
                    <th width="13%">plot Images</th>
                    <th width="9%">plot Document</th>
                    <th>User status</th>
                    <th width="380px">Action</th>
                </tr>
                @if(count($products)>0)
            @foreach($products as $product)
                <tr>
                    <!-- <td>{{$product->id}}</td> -->
                    <td>{{$product->name}}</td>
                    <!-- <td>{{$product->fathername}}</td> -->
                    <!-- <td>{{$product->cnic}}</td> -->
                    <!-- <td>{{$product->occupation}}</td> -->
                   <!-- <td>{{$product->telephone}}</td> -->
                    <td>{{$product->cellno}}</td>
                    <!-- <td>{{$product->mailingaddress}}</td> -->
                    <!-- <td>{{$product->permanentaddress}}</td> -->
                    <!-- <td>{{$product->age}}</td> -->

                    
                    <td>{{$product->plotaddress}}</td>
                    <td>{{$product->regnum}}</td>
                    <td>{{$product->pricepermarla}}</td>
                    <td>{{$product->bookingdate}}</td>
                    <td>{{$product->plotprice}}</td>
                    <td>
                        
                       @php
                        $product->plotimagetitle=json_decode($product->plotimagetitle,true);
                        @endphp
                        @foreach($product->plotimagetitle as $f)     
                        @php $filen=str_replace('"','',$f);@endphp
                        <img src="{{ asset('storage/photos/'.$f) }}" style="margin:10px; width:130px;" height="25%">
                        @php break @endphp
                        @endforeach
                    <a class="btn btn-info" style="margin:10px;" href="showphotos/{{$product->plotimagedockey}}">View all</a>
            
            
                    </td>
                    

                    <td>     
                        @php
                        $product->plotfiletitle=json_decode($product->plotfiletitle,true);
                        @endphp
                        
                        
                        <a class="btn btn-info"  target="_blank" href="{{asset('storage/files/'.$product->plotfiletitle) }}">View file</a>
            

                    </td>

                    
                    <td>    
                        @if(!$product->status)
                        <a class="btn btn-success" href="userstatus/{{$product->id}}/1">Enable</a>
                        @else
                        <a class="btn btn-danger" href="userstatus/{{$product->id}}/0">Disable</a>

                        
                        @endif

                    </td>
                
                    <td>
                        <form action="/users/userdeleted" method="post">
                            
                            <a class="btn btn-info" href="show/{{$product->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg></a>
            
                            <a class="btn btn-primary" href="edit/{{$product->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>
        
                            @csrf
                            
            
                            <button type="submit" name="id" value="{{$product->id}}"class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </table>
            

                    {{--   {{$products->links()}}--}}
    @else
    <p>No Products found</p>
    @endif
   
    </div>
</x-admin-layout>
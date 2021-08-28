<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ID') }}
        </h2>
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:pt-0">
        <h1 class="text-3xl font-semibold">Your Details</h1>
    </div>

    
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-4">
            <div class="col-start-2 col-span-2 p-6">
                     <form action="/display/{{$userdetail->id}}" enctype="multipart/form-data" method="post">
                     @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                            <input type="text" name="name" wire:model="name" id="name" value="{{$userdetail->name}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('name') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="Father\'s name" class="block text-sm font-medium text-gray-700">Father's name</label>
                                            <input type="text" wire:model="fathername" name="fathername" id="fathername" value="{{$userdetail->fathername}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('fathername') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="cnic" class="block text-sm font-medium text-gray-700">CNIC</label>
                                            <input type="text" wire:model="cnic" name="cnic" id="cnic" value="{{$userdetail->cnic}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('cnic') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                                            <input type="text" name="occupation" wire:model="occupation" id="occupation" value="{{$userdetail->occupation}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('occupation') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-3">
                                            <label for="Cell_no" class="block text-sm font-medium text-gray-700">Cell No:</label>
                                            <input type="text" wire:model="cellno" name="cellno" id="cellno" value="{{$userdetail->cellno}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('cellno') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-3 sm:col-span-3">
                                            <label for="Telephone_no" class="block text-sm font-medium text-gray-700">Telephone No:</label>
                                            <input type="text" wire:model="telephone" name="telephone" id="telephone" value="{{$userdetail->telephone}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('telephone') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mailing_address" class="block text-sm font-medium text-gray-700">Mailing address</label>
                                            <input type="text" wire:model="mailingaddress" name="mailingaddress" id="mailingaddress"  value="{{$userdetail->mailingaddress}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('mailingaddress') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="permanent_address" class="block text-sm font-medium text-gray-700">Permanent Address</label>
                                            <input type="text" wire:model="permanentaddress" name="permanentaddress" id="permanentaddress" value="{{$userdetail->permanentaddress}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('permanentaddress') <span ...>{{ $message }}</span> @enderror
                                        </div>


                                        <div class="col-span-6">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                            <input type="email" wire:model="email" name="email" id="email" value="{{$userdetail->email}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('email') <span ...>{{ $message }}</span> @enderror
                                        </div>


                                        <div class="col-span-6">
                                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                                            <input type="number" wire:model="age" name="age" id="age" value="{{$userdetail->age}}" value="18" min="18" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="plotaddress" class="block text-sm font-medium text-gray-700">Address</label>
                                            <input type="text" wire:model="plotaddress" name="plotaddress" id="plotaddress" value="{{$userdetail->plotaddress}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('plotaddress') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="registration number" class="block text-sm font-medium text-gray-700">Registration Number</label>
                                            <input type="text" wire:model="regnum" name="regnum" id="regnum" value="{{$userdetail->regnum}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('regnum') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="price per marla" class="block text-sm font-medium text-gray-700">Price Per Marla</label>
                                            <input type="number" wire:model="pricepermarla" name="pricepermarla" id="pricepermarla" value="{{$userdetail->pricepermarla}}" value="000000" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('pricepermarla') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="booking date" class="block text-sm font-medium text-gray-700">Booking Date</label>
                                            <input type="date" wire:model="bookingdate" name="bookingdate" id="bookingdate" value="{{$userdetail->bookingdate}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('bookingdate') <span ...>{{ $message }}</span> @enderror
                                        </div>



                                        <div class="col-span-6">
                                            <label for="plot price" class="block text-sm font-medium text-gray-700">Plot Price</label>
                                            <input type="number" wire:model="plotprice" name="plotprice" id="plotprice" value="{{$userdetail->plotprice}}" value="000000" min="1000" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>


                                        <div class="col-span-6">
                                            <label for="plot file" class="block text-sm font-medium text-gray-700">Plot Document</label>
                                            @php
                                                $userdetail->plotfiletitle=json_decode($userdetail->plotfiletitle,true);
                                            @endphp
                                            <iframe style="height:500px; width:100%; " src="{{asset('storage/files/'.$userdetail->plotfiletitle) }}"></iframe>
    
                                        </div>
                                          
                                        <div class="col-span-6">
                                            <label for="images" class="block text-sm font-medium text-gray-700">Plot Images</label>                            
                                                
                                            @php
                                                $userdetail->plotimagetitle=json_decode($userdetail->plotimagetitle,true);
                                        @endphp
                                        @foreach ($userdetail->plotimagetitle as $p )
                                        @php $p=str_replace('"','',$p);@endphp
                                            <img src="{{asset('storage/photos/'.$p) }}" style="width: 100px; height:100px; display:inline-block;">
                                                        
                                        
                                            @endforeach
                                                    
                                        
                                            
                                        </div>

                                </div>
                            </div>

                           </form>

                    </div>

        </div>
    </div>
    
</div>
</x-app-layout>
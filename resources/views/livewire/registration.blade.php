<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <br><br><br><br>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-4">
            <div class="col-start-2 col-span-2 p-6">
                <form wire:submit.prevent="submit" method="POST">
          
<!-- 
    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0"> -->
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6  flex justify-center pt-8 sm:pt-0">
        
                                    <h1 class="text-3xl font-semibold">Plot Owner's Details</h1>
                           </div>


                            <div  class="col-span-6 flex justify-center gap-6" >
                                <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" wire:model="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('name') <span ...>{{ $message }}</span> @enderror
                                </div>

                                <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                    <label for="Father\'s name" class="block text-sm font-medium text-gray-700">Father's name</label>
                                    <input type="text" wire:model="fathername" id="fathername" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('fathername') <span ...>{{ $message }}</span> @enderror
                                </div>
                           </div>


                                        <div class="col-span-6 flex justify-center gap-6" >
                                        


                                        <div style="width:50%;" class="col-span-3 sm:col-span-3">
                                            <label for="Cell_no" class="block text-sm font-medium text-gray-700">Cell No:</label>
                                            <input type="text" wire:model="cellno" id="cellno" autocomplete="cellno" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('cellno') <span ...>{{ $message }}</span> @enderror
                                        </div>

                                        <div style="width:50%;" class="col-span-3 sm:col-span-3">
                                            <label for="Telephone_no" class="block text-sm font-medium text-gray-700">Telephone No:</label>
                                            <input type="text" wire:model="telephone" id="telephone" autocomplete="telephone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('telephone') <span ...>{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                 <div class="col-span-6 flex justify-center gap-6" >
                                   
                                    <div style="width:50%;" class="col-span-3">
                                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                                    <input type="number" wire:model="age" id="age" autocomplete="age" value="18" min="18" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>
                                        
                                <div style="width:50%;" class="col-span-3 sm:col-span-3">
                                            <label for="cnic" class="block text-sm font-medium text-gray-700">CNIC</label>
                                            <input type="text" wire:model="cnic" id="cnic" autocomplete="cnic" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('cnic') <span ...>{{ $message }}</span> @enderror
                                
                                        </div>
                                    </div>
                                    
                                    <div  class="col-span-6 flex justify-center gap-6" >
                                        

                                        <div style="width:50%;" class="col-span-3 sm:col-span-3">
                                            <label for="occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                                            <input type="text" wire:model="occupation" id="occupation" autocomplete="occupation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('occupation') <span ...>{{ $message }}</span> @enderror
                                        </div>
                                                
                                        <div style="width:50%;"  class="col-span-3">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                            <input type="email" wire:model="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('email') <span ...>{{ $message }}</span> @enderror
                                        </div>
                                    </div>


                                    <div  class="col-span-6 flex justify-center gap-6" >

                                       <div style="width:50%;" class="col-span-3 sm:col-span-3">
                                            <label for="mailing_address" class="block text-sm font-medium text-gray-700">Mailing address</label>
                                            <input type="text" wire:model="mailingaddress" id="mailingaddress" autocomplete="mailingaddress" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('mailingaddress') <span ...>{{ $message }}</span> @enderror
                                        </div>


                                        <div style="width:50%;" class="col-span-3 sm:col-span-3">
                                            <label for="permanent_address" class="block text-sm font-medium text-gray-700">Permanent Address</label>
                                            <input type="text" wire:model="permanentaddress" id="permanentaddress" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('permanentaddress') <span ...>{{ $message }}</span> @enderror
                                        </div>
                                   </div>



                                
                                <div class=" col-span-6 flex justify-center pt-8 sm:pt-0">
        
                                           <h1 class="text-3xl font-semibold">Plot's Details</h1>
                                     </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="plotaddress" class="block text-sm font-medium text-gray-700">Plot Address</label>
                                    <input type="text" wire:model="plotaddress" id="plotaddress" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('plotaddress') <span ...>{{ $message }}</span> @enderror
                                </div>























                                <div class="col-span-6 sm:col-span-3">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea id="description" wire:model="description" class="form-control" placeholder="Enter description of your Property" rows="4" required></textarea>
                                     @error('plotaddress') <span ...>{{ $message }}</span> @enderror
                                </div>

                                <div  class="col-span-6 flex justify-center gap-6" >
                                    <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                        <select wire:model="category" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <option value="Residential" selected>Residential</option>
                                
                                                <option value="Residential">Residential</option>
                                                <option value="Commercial">Commercial</option>
                                        
                                        </select> @error('name') <span ...>{{ $message }}</span> @enderror
                                    </div>
    
                                    <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                        <label for="furnished" class="block text-sm font-medium text-gray-700">Furnished</label>
                                        <select wire:model="furnished" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <option value="Unfurnished" selected>Unfurnished</option>
                                
                                                <option value="Furnished">Furnished</option>
                                                <option value="Unfurnished">Unfurnished</option>
                                        
                                        </select>
                                   
                                        @error('fathername') <span ...>{{ $message }}</span> @enderror
                                    </div>
                               </div>

                               <div  class="col-span-6 flex justify-center gap-6" >

                                <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                    <label for="bedrooms" class="block text-sm font-medium text-gray-700">Bedrooms</label>
                                    <input type="number" wire:model="bedrooms" id="bedrooms" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('fathername') <span ...>{{ $message }}</span> @enderror
                                </div>

                                <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                    <label for="bathrooms" class="block text-sm font-medium text-gray-700">Bathrooms</label>
                                    <input type="text" wire:model="bathrooms" id="bathrooms" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('name') <span ...>{{ $message }}</span> @enderror
                                </div>

                           </div>

                           <div  class="col-span-6 flex justify-center gap-6" >
                            <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                <label for="floorlevel" class="block text-sm font-medium text-gray-700">Floor</label>
                                <input type="number" wire:model="floorlevel" id="floorlevel" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name') <span ...>{{ $message }}</span> @enderror
                            </div>

                            <div style="width:50%;" class="col-span-6 sm:col-span-3">
                                <label for="area" class="block text-sm font-medium text-gray-700">Property Area in sq feet</label>
                                <input type="text" wire:model="area" id="area" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('fathername') <span ...>{{ $message }}</span> @enderror
                            </div>
                       </div>

                       <div  class="col-span-6 flex justify-center gap-6" >
                        <div style="width:50%;" class="col-span-6 sm:col-span-3">                            
                                <label for="rent" class="block text-sm font-medium text-gray-700">Rent / Sell</label>
                                  
                                        <select wire:model="rent" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <option value="" selected>Choose state</option>
                                
                                                <option value="Rent">Rent</option>
                                                <option value="Sell">Sell</option>
                                        
                                        </select>
                                   
                                </div>
                            

                        <div style="width:50%;" class="col-span-6 sm:col-span-3">
                            <label for="mapaddress" class="block text-sm font-medium text-gray-700">Map</label>
                            <input type="text" wire:model="mapaddress" id="mapaddress" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('fathername') <span ...>{{ $message }}</span> @enderror
                        </div>
                   </div>




















                                <div class="col-span-6 flex justify-center gap-6" >
                                <div class="col-span-4 sm:col-span-3">
                                    <label for="registration number" class="block text-sm font-medium text-gray-700">Registration Number</label>
                                    <input type="text" wire:model="regnum" id="regnum" autocomplete="regnum" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('regnum') <span ...>{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-4 sm:col-span-3">
                                    <label for="price per marla" class="block text-sm font-medium text-gray-700">Price Per Marla</label>
                                    <input type="number" wire:model="pricepermarla" id="pricepermarla" autocomplete="pricepermarla" value="000000" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('pricepermarla') <span ...>{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-4 sm:col-span-3">
                                    <label for="booking date" class="block text-sm font-medium text-gray-700">Booking Date</label>
                                    <input type="date" wire:model="bookingdate" id="bookingdate" autocomplete="occupation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('bookingdate') <span ...>{{ $message }}</span> @enderror
                                </div>



                                <div class="col-span-4">
                                    <label for="plot price" class="block text-sm font-medium text-gray-700">Plot Price</label>
                                    <input type="number" wire:model="plotprice" id="plotprice" autocomplete="age" value="000000" min="1000" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                                <div class="col-span-6">
                                    <label for="plot file" class="block text-sm font-medium text-gray-700">Plot Document</label>
                                    <input type="file" accept="application/pdf" wire:model="plotfile" id="plotfile" autocomplete="plotfile" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>


                                <div class="col-span-6">
                                    <label for="images" class="block text-sm font-medium text-gray-700">Plot Images</label>
                                    <input type="file" wire:model="photo" name="photo" id="files" multiple class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />

                                    @error('photo.*')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror

                                    <h2>Preview Images</h2>
                                    <!-- Loading Message for Images -->
                                    <div wire:loading wire:target="slides">Uploading Slide Images...</div>
                                    @if( !empty( $photo ) )
                                    <div>
                                        @foreach ( $photo as $p )
                                        <img src="{{ $p->temporaryUrl() }}" alt="" style="width: 100px; height:100px; display:inline-block;">
                                        @endforeach
                                    </div>
                                    @endif
                                </div>

                            </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                save
                            </button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>

</div>

@extends('products.layout')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Product</h2>
               </div>
               
            <div class="pull-right">
                <a class="btn btn-success" href="/products/create"> Create New Product</a>
                <a class="btn btn-success" href="/products/index"> Show All Products</a>
            </div>
               
           </div>
       </div>
      
       <!-- @if ($errors->any())
           <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif -->
     
       <form action="/products/show/{{$product->id}}" method="post">
            @csrf
           <!-- @method('PUT') -->
           
    
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Name:</strong>
                       <input type="text" name="name" value="{{$product->product_title}}" class="form-control" placeholder="Name">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Detail:</strong>
                       <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{$product->product_desc}}</textarea>
                   </div>
               </div>
               
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Price:</strong>
                       <input type="number" value="{{$product->product_price}}" class="form-control" name="price" >
                   </div>
               </div>

               
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </div>
      
       </form>
   @endsection
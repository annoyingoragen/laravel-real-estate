@extends("products.layout")
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="create"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    @if(count($products)>0)
    @foreach($products as $product)
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_title}}</td>
            <td>{{$product->product_desc}}</td>
            <td>{{$product->product_price}}</td>
            <td>
                <form action="/products/productdeleted" method="post">
   
                    <a class="btn btn-info" href="show/{{$product->id}}">Show</a>
    
                    <a class="btn btn-primary" href="edit/{{$product->id}}">Edit</a>
   
                    @csrf
                    
      
                    <button type="submit" name="id" value="{{$product->id}}"class="btn btn-danger">Delete</button>
                </form>
                
            </td>
        </tr>
    
    </table>
    
    @endforeach
                {{$products->links()}}
    @else
    <p>No Products found</p>
    @endif
  

      
@endsection
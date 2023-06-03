<html>
    <center>
    <h1> Products</h1>
    @foreach($products as $product) 
        Name: {{ $product->product_name }}
        &nbsp;  &nbsp;
        Category : {{$product->category->id}}
       &nbsp;  &nbsp;
       @foreach ($product->owners as $owner)
      Owner : {{ $owner->owner_name }}
       @endforeach
       &nbsp;  &nbsp;
       <a href="{{ route('products.delete', $product->id) }}"> Delete Product </a>
       <br><br> 
       @endforeach
   
    <br><br>
<a href="newproduct/"> Add New Product </a>
&nbsp;  &nbsp;

    </center>
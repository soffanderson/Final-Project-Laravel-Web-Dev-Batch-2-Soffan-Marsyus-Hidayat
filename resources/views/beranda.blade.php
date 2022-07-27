@extends('master-layout')

@section('home')
<h1>Beranda</h1>

<button class="bg-sky-600 hover:bg-sky-700 p-3">
    Save changes
</button>

<h2>List Product</h2>
<a class="btn btn-success" href="/product/create">Add New Product</a>
<hr>
<?php
            foreach($products as $product){
                echo "<li>Nama : {$product->name} </li>";
                echo "Price : {$product->price} <br>";
                echo "Stok : {$product->stock} <br>";
                echo "Image : {$product->image} <br>";
                ?>
<a href="/product/{{ $product->id }}/edit">Edit</a>
<form action="product/{{ $product->id }}/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<?php
        }
        ?>
@endsection
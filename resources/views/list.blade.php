<h1>Beranda</h1>
<p>Hello World!</p>
<br>
<h2>List Product</h2>
<a href="/product/create">Add New Product</a>
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
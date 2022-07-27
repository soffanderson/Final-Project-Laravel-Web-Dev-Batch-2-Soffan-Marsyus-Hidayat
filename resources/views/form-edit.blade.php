<a href="/">
    << Back</a>
        <form action="" method="POST">
            @csrf
            <h2>Edit Product</h2><br>
            <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}"><br>
            <textarea name="description" id="" cols="30" rows="10"
                placeholder="Deskripsi">{{ $product->description }}</textarea>
            <br>
            <input type="number" name="stock" placeholder="stock" value="{{ $product->stock }}">
            <br>
            <input type="number" name="price" placeholder="price" value="{{ $product->price }}">
            <br>
            <input type="file" name="image" placeholder="image">
            <br>
            <input type="submit" value="Save Data">
        </form>
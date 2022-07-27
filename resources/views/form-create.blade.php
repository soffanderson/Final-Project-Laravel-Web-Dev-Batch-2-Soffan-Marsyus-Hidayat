@extends('master-layout')

@section('content')
<a href="/">
    << Back</a>
        <form action="" method="POST">
            @csrf
            <h2>Create New Product</h2><br>
            <input type="text" name="name" placeholder="Product Name"><br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Deskripsi"></textarea>
            <br>
            <input type="number" name="stock" placeholder="stock">
            <br>
            <input type="number" name="price" placeholder="price">
            <br>
            <input type="file" name="image" placeholder="image">
            <br>
            <input type="submit" value="Add Data">
        </form>
        @endsection
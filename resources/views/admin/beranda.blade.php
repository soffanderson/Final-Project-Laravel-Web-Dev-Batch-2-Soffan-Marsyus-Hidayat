@extends('admin.admin-layout')

@section('content')

<div class="container mx-auto">

    {{-- TABEL --}}
    <section id="data">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-10 lg:py-5">
            <div class="flex flex-col w-full mb-5 text-center">
                <h1
                    class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-5xl lg:max-w-7xl">
                    Data Mahasiswa
                </h1>
                <p class="max-w-xl mx-auto mt-5 text-base leading-relaxed text-center text-gray-500">Berikut adalah data
                    mahasiswa di Universitas Lambung Mangkurat.</p>
            </div>
        </div>
    </section>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg w-10/12 mx-auto">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NIK
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Jurusan
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Fakultas
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Masuk
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Lulus
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- Data Mahasiswa --}}
                <?php
                 foreach ($mahasiswas as $mahasiswas) {
                ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo "{$mahasiswas->name}" ?>
                    </th>
                    <td class="py-4 px-6">

                        <?php echo "{$mahasiswas->nik}" ?>

                    </td>
                    <td class="py-4 px-6">
                        <?php echo "{$mahasiswas->jurusan}" ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php echo "{$mahasiswas->fakultas}" ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php echo "{$mahasiswas->tahun_masuk}" ?>
                    </td>
                    <td class="py-4 px-6">
                        <?php echo "{$mahasiswas->tahun_lulus}" ?>
                    </td>
                    <td class="py-4 px-6">
                        <form action="/admin/mahasiswa/{{ $mahasiswas->id }}/delete" method="POST">
                            <a href="/admin/mahasiswa/{{$mahasiswas->id}}/edit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php         
                }
                ?>
            </tbody>
        </table>
        <div class="flex gap-2 flex-row-reverse">
            <a href="admin/mahasiswa/create"
                class=" m-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">Create
                Data</a>
        </div>
    </div>




    {{-- list prodeuct --}}
    {{-- <h2>List Product</h2>
    <a class="btn btn-success" href="/product/create">Add New Product</a>
    <hr>
    //
    <?php
    //        foreach($products as $product){
    //            echo "<li>Nama : {$product->name} </li>";
    //            echo "Price : {$product->price} <br>";
    //            echo "Stok : {$product->stock} <br>";
     //           echo "Image : {$product->image} <br>";
     //           ?>
    <a href="/product/{{ $product->id }}/edit">Edit</a>
    <form action="product/{{ $product->id }}/delete" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    //
    <?php
    //    }
    //    ?> --}}
</div>
@endsection
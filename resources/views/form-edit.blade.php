@extends('master-layout')

@section('content')
<div class="container mx-auto w-2/5">
    <section>
        <div class="px-4 py-5 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-10 lg:py-5">
            <div class="flex flex-col w-full mb-5 text-center">
                <h1
                    class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-4xl lg:max-w-7xl">
                    Form Edit Data Mahasiswa
                </h1>
            </div>
        </div>
    </section>
    {{-- Form Input Start --}}
    <form action="" method="POST">
        @csrf
        <div class="relative z-0 mb-6 w-full group">
            <div class="mb-6">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap</label>
                <input type="text" name="name" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: Soffan M. Hidayat" value="{{ $mahasiswa->name }}">
            </div>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <div class="mb-6">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor
                    Induk Mahasiswa</label>
                <input type="text" name="nik" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: 117049622345" value="{{ $mahasiswa->nik }}">
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan</label>
                <input type="text" name="jurusan" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: Teknik Informatika" value="{{ $mahasiswa->jurusan }}">
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fakultas</label>
                <input type="text" name="fakultas" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: FKIP" value="{{ $mahasiswa->fakultas }}">
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun
                    Masuk</label>
                <input type="text" name="tahun_masuk" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: 2014" value="{{ $mahasiswa->tahun_masuk }}">
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun
                    Lulus</label>
                <input type="text" name="tahun_lulus" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: 2018" value="{{ $mahasiswa->tahun_lulus }}">
            </div>
        </div>
        <div class="flex gap-2 flex-row-reverse">
            <input type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer"
                value="Submit">
            <a href="/" type="submit"
                class="text-black bg-slate-100 hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Cancel</a>
        </div>
    </form>
</div>
@endsection

{{--
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
        </form> --}}
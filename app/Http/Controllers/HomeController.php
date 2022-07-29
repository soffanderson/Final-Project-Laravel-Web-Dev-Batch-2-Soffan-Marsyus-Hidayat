<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function homePage()
    {
        // data mahasiswa
        $mahasiswas = Mahasiswa::get();
        return view('beranda', compact("mahasiswas"));
        var_dump($mahasiswas);

        // $dataUsers = ["Soffan", "Marsyus", "Hidayat"];
        // $products = Product::get();
        // return view('beranda', compact("products"));
    }
    public function aboutPage()
    {
        return view('about');
    }
}

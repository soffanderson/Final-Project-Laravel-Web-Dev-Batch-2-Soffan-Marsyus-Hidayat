<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function homePage()
    {
        // $dataUsers = ["Soffan", "Marsyus", "Hidayat"];
        $products = Product::get();
        return view('beranda', compact("products"));
    }
    public function aboutPage()
    {
        return view('about');
    }
}

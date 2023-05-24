<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $products = 
        [
            [
                "nama" => "CupCake Birtday",
                "harga" => 50000,
                "img" => "https://kurio-img.kurioapps.com/21/09/11/04dcddea-c92d-4ad5-8308-7a9f8da91619.jpe"
            ],

            [
                "nama" => "CupCake Strobery",
                "harga" => 59000,
                "img" => "https://www.recipetineats.com/wp-content/uploads/2020/09/Vanilla-Cupcakes-with-Vanilla-Swiss-Meringue-SQ.jpg"
            ],

            [
                "nama" => "CupCake Ice Cream",
                "harga" => 60000,
                "img" => "https://www.crazyforcrust.com/wp-content/uploads/2014/06/Ice-Cream-Cupcakes-8-of-9w-500x500.jpg"
            ],

            [
                "nama" => "CupCake Buah",
                "harga" => 50000,
                "img" => "https://media.istockphoto.com/id/1220971969/id/foto/aneka-cupcake-pada-latar-belakang-merah-muda.jpg?s=1024x1024&w=is&k=20&c=j8KzGP-zja2Ob27xIsectcnTNM_zsFF1NPgUvp1DbJc="
            ],
        ];
        return view('landing', compact('products'));
    }
}

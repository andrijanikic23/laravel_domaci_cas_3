<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;

class ShopController extends Controller
{
    public function index()
    {
        $products = [
            "iPhone 14", "Samsung A52s", "Samsung A30", "iPhone 13 pro"
        ];

        return view("shop", compact('products'));
    }
}

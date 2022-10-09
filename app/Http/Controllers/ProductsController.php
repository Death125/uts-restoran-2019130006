<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $menus = [
            ["url" => "assets/images/AyamGoreng.png", "menuName" => "Fried Chicken", "price" => 25000, "category" => "Main Course"],
            ["url" => "assets/images/IgaPenyet.png", "menuName" => "Ribs", "price" => 74000, "category" => "Main Course"],
            ["url" => "assets/images/MilkShake.png", "menuName" => "Milkshake", "price" => 32000, "category" => "Dessert"],
            ["url" => "assets/images/Salad.png", "menuName" => "Salad", "price" => 30000, "category" => "Appetizer"],
            ["url" => "assets/images/Sweetandsourprawns.png", "menuName" => "Sweet and sour prawns", "price" => 42000, "category" => "Appetizer"],
            ["url" => "assets/images/ChocolatePudding.png", "menuName" => "Chocolate Pudding", "price" => 27000, "category" => "Dessert"],
            ["url" => "assets/images/CreamPudding.png", "menuName" => "Cream Pudding", "price" => 31000, "category" => "Dessert"],
            ["url" => "assets/images/Lasagna.png", "menuName" => "Lasagna", "price" => 62000, "category" => "Main Course"],
            ["url" => "assets/images/Spaghetti.png", "menuName" => "Spagheti", "price" => 52000, "category" => "Main Course"],
        ];

        return view('products', compact('menus'));
    }
}

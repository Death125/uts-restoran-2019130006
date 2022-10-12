<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testimonialsController extends Controller
{
    public function testimonials()
    {
        $testimony = [
            [
                "img_url" => "assets/images/Rudi.png", "nama" => "Rudi",
                "comment" => "THE FOOD HERE IS REALLY GOOD, SO CAN'T WAIT TO ORDER AGAIN",
                "emoji" => "😍"
            ],
            [
                "img_url" => "assets/images/Ani.png", "nama" => "Ani",
                "comment" => "I Love the dessert, it's really good !",
                "emoji" => ""
            ],
            [
                "img_url" => "assets/images/Eliz.png", "nama" => "Eliz",
                "comment" => "The best service !",
                "emoji" => ""
            ],
            [
                "img_url" => "assets/images/Gary.png", "nama" => "Gary",
                "comment" => "My favorite drink is milkshake, very delicious",
                "emoji" => "😀"
            ],
            [
                "img_url" => "assets/images/Eric.png", "nama" => "Eric",
                "comment" => "Can add a new menu, namely fried duck ",
                "emoji" => "😅"
            ],
            [
                "img_url" => "assets/images/Miya.png", "nama" => "Miya",
                "comment" => "I think the price of fried rice is too expensive if there is only meatball and
                sausage stuffing. But still delicious",
                "emoji" => "😋"
            ]
        ];
        return view('testimonials', compact('testimony'));
    }
}

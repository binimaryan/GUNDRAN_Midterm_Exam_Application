<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "title" => "One Piece",
                "genre" => "Adventure",
                "author" => "Eiichiro Oda"
            ],
            [
                "title" => "Fruits Basket",
                "genre" => "Romance / Drama",
                "author" => "Natsuki Takaya"
            ],
            [
                "title" => "Hunter X Hunter",
                "genre" => "Adventure / Fantasy",
                "author" => "Yoshihiro Togashi"
            ]
        ];
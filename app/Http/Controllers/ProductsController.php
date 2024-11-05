<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Laravel Course from Le Quang Tho';
        $x = 1;
        $y = 2;
        $name = 'Tho';
        // return view('products.index', compact('title', 'x', 'y', 'name'));
        $myphone = [
            'name' => 'iphone 14',
            'year' => 2022,
            'isFavourite' => true,
        ];
        // return view('products.index', compact('myphone'));
        //send directly 
        return view('products.index', [
            'myphone' => $myphone
        ]);
    }
    public function about() {
        return 'This is About page';
    }
    public function detail($id) {
        return "product's id = ".$id;
    }
}

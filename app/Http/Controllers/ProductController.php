<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
// use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return 'This is a catalog page';
    }
    public function show(){
        return 'This is a product page';
    }
}
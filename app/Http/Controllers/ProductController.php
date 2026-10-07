<?php
namespace App\Http\Controllers;
use App\Product;
class ProductController extends Controller {
    public function index() { return view('products.index'); }
    public function create() { return view('products.create'); }
    public function edit($product) { return view('products.edit'); }
}

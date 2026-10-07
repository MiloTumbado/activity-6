@extends('layouts.app')
@section('title', 'Product View')
@section('nav')@endsection
@section('content')
<h1>Product View</h1><p>Catálogo de productos</p>
<div class="actions"><a class="button" href="{{ route('products.create') }}">Add Product</a></div>
@endsection

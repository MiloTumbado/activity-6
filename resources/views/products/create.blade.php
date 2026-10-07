@extends('layouts.app')
@section('title', 'New Product Creation')
@section('nav')@endsection
@section('content')
<h1>New Product Creation</h1><p>Vista de creación de productos.</p><a href="{{ route('products.index') }}">Volver a productos</a>
@endsection

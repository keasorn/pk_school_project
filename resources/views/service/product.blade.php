@extends("layouts.app")

@section('content')
    <h3>ID: {{$product['id']}}</h3>
    <h3>Name: {{$product['name']}}</h3>
    <h3>Description: {{$product['description']}}</h3>
    <h3>Price: {{$product['price']}}</h3>
@endsection

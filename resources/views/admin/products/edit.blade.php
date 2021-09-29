@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <form action="{{route('admin.products.update', ['product'=>$product])}}" method="post">
                @csrf
                @method('put')
                <label>Name</label>
                <input type="text" name="name" value="{{$product->name}}">
                <label>Price</label>
                <input type="text" name="price" value="{{$product->price}}">
                <label>category id</label>
                <input type="text" name="category_id" value="{{$product->category_id}}">
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

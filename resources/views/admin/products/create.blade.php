@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <form action="{{route('admin.products.store')}}" method="post">
                @csrf
                <label>Name</label>
                <input type="text" name="name">
                <label>Price</label>
                <input type="text" name="price">
                <label>category id</label>
                <input type="text" name="category_id">
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

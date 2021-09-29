@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <form action="{{route('admin.categories.update', ['category'=>$category])}}" method="post">
                @method('put')
                @csrf
                <input type="text" name="category" value="{{$category->category}}">
                <input type="text" name="description" value="{{$category->description}}">
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

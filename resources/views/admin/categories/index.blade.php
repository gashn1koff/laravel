@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CATEGORIES</h2>
                    <a href="{{route('admin.categories.create')}}" class="btn btn-info">ДОБАВИТЬ КАТЕГОРИЮ</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category}}</td>
                                <td>{{$category->description}}</td>
                                <td><a href="{{route('admin.categories.edit', ['category'=>$category->id])}}">Редактировать</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Page Heading -->

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection

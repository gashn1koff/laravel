@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Products</h2>
                    <a href="{{route('admin.products.create')}}" class="btn btn-info">ДОБАВИТЬ ПРОДУКТ</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category id</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->category_id}}</td>
                                    <td><a href="{{route('admin.products.edit', ['product'=>$product->id])}}">Редактировать</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing products</span>
                    {{$products->links()}}
                </div>
            </div>
            <!-- Page Heading -->

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection

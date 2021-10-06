@extends('layouts.shop')
@section('content')
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">All Categories</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Headphones</a></li>
                        <li class="active">Product name goes here</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            @dump($errors->all())
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('checklogin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection


@extends('layouts.site')

@section('title','صوره السيارة')

@section('content')

    <div class="terms-conditions product-page">
        <div class="terms-title">
            <div class="container">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="#">ختر صورة </a></li>
                        <li class="active">Furniture</li>
                        <li class="active">Sofa</li>
                        <li><a href="#">All setup Sofa</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Subcategories</h3>
                <form action="/image" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="image[]" class="form-control-image" multiple>
                    </div>
                    <input type="submit" value="send" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

@endsection

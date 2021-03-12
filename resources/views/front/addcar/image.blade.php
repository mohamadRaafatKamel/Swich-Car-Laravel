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
    <div class="furniture-box">
        <div class="container">
            <div class="row">
                <div class="furniture-main">
                    <h2>اضف صوره</h2>
                    <form action="{{ route('addCar.image.save') }}" enctype="multipart/form-data" method="post">
                        @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="furniture-middle">
                            <div class="big-box">
                                <div class="big-dit-b clearfix">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="left-big">
                                            <div class="tight-btn-b clearfix">
                                                <input type="file" name="image[]" accept="image/*" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="right-big-b">
                                            <div class="tight-btn-b clearfix">
                                                <button type="submit" class="btn view-btn">send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                            <div class="row cat-pd">
                                @isset($images)
                                @foreach($images as $image)
                                <div class="col-md-4 col-sm-4">
                                    <div class="small-box-c">
                                        <div class="small-img-b">
                                            <img src="{{ asset($image->path) }}" alt="#" />
                                        </div>

                                        <div class="prod-btn">
                                            @if($image->notes != '1')
                                                <a href="{{route('addCar.image.prime',$image->id)}}"><i class="fa fa-star" aria-hidden="true"></i>جعلها الرئيسبه</a>
                                            @endif
                                            <a href="{{route('addCar.image.destroy',$image->id)}}"><i class="fa fa-thumbs-up0" aria-hidden="true"></i>مسح</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endisset

                            </div>

                    <div class="big-box">
                        <div class="big-dit-b clearfix">
                            <div class="col-md-6 col-sm-6">
                                <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                        <a class="view-btn" href="{{route('addCar.brand')}}">التالي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection

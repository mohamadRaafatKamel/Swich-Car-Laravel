@extends('layouts.site')

@section('title','بيانات السياره')

@section('content')

    <div style="direction: rtl; min-height: 500px;">

        <div class="terms-conditions product-page">
            <div class="terms-title">
                <div class="container">
                    <div class="row">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('addCar.image') }}">صور </a></li>
                            <li><a href="{{ route('addCar.brand') }}">شركه </a></li>
                            <li><a href="{{ route('addCar.type') }}">نوع </a></li>
                            <li><a href="{{ route('addCar.category') }}">تصنيف </a></li>
                            <li><a href="{{ route('addCar.year') }}">الموديل </a></li>
                            <li><a href="{{ route('addCar.city') }}">المدينه </a></li>
                            <li><a href="{{ route('addCar.elker') }}">الكير </a></li>
                            <li><a href="{{ route('addCar.color') }}">اللون </a></li>
                            <li><a href="{{ route('addCar.agent') }}">الاجنس </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            @include('include.alerts.success')
            @include('include.alerts.errors')
            <div class="row" style="margin-top: 45px">
                <div class="col-md-8 col-md-offset-4">
                    <h4>بيانات السياره</h4>
                    <form method="post" action="{{ route('addCar.info.save') }}">
                        @csrf

                        <div class="form-group">
                            <label for="phone">الاسم</label>
                            <input type="text" class="form-control" name="name" placeholder="add name"
                                   value="{{
    $car->getBrand()." ".$car->getType()." ".$car->getCategory()." ".$car->getSlnder()." ".$car->model}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">الماركة</label>
                            <input type="text" class="form-control" name="brand_id" value="{{ $car->getBrand() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">النوع</label>
                            <input type="text" class="form-control" name="type_id" value="{{ $car->getType() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">الفئة</label>
                            <input type="text" class="form-control" name="cat_id" value="{{ $car->getCategory() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">السنة</label>
                            <input type="text" class="form-control" name="model" value="{{ $car->model }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">المدينة</label>
                            <input type="text" class="form-control" name="city_id" value="{{ $car->getCity() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">السلندر</label>
                            <input type="text" class="form-control" name="slnder_id" value="{{ $car->getSlnder() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">اللون</label>
                            <input type="text" class="form-control" name="color_id" value="{{ $car->getColor() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">الاجنس</label>
                            <input type="text" class="form-control" name="agent_id" value="{{ $car->getAgent() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">الكير</label>
                            <input type="text" class="form-control" name="elker" value="{{ $car->elker }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">الماكينة</label>
                            <select name="machen" class="form-control" required>
                                <option value=""></option>
                                <option value="v1">v1</option>
                                <option value="v2">v2</option>
                                <option value="v3">v3</option>
                                <option value="v4">v4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">الهيكل</label>
                            <select name="body" class="form-control" required>
                                <option value=""></option>
                                <option value="body1">body1</option>
                                <option value="body2">body2</option>
                                <option value="body3">body3</option>
                                <option value="body4">body4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">الوقود</label>
                            <select name="fuel" class="form-control" required>
                                <option value=""></option>
                                <option value="غاز">غاز</option>
                                <option value="بنزين">بنزين</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">وصف</label>
                            <textarea name="description" minlength="50" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">السعر</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

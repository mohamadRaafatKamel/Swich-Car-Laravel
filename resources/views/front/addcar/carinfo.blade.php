@extends('layouts.site')

@section('title','بيانات السياره')

@section('content')

    <div style="direction: rtl; min-height: 500px;">
        <div class="container">
            @include('include.alerts.success')
            @include('include.alerts.errors')
            <div class="row" style="margin-top: 45px">
                <div class="col-md-8 col-md-offset-4">
                    <h4>بيانات السياره</h4>
                    <form method="post" action="{{ route('auth.infopost') }}">
                        @csrf

                        <div class="form-group">
                            <label for="phone">الاسم</label>
                            <input type="text" class="form-control" name="name" placeholder="add name"
                                   value="{{$carInfo['type']}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="phone">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="add password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
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

@extends('layouts.site')

@section('title','تصنيف')


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
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="furniture-box">
            <div class="container">
                <div class="row">
                    <div class="furniture-main">
                        <h2>الفئة</h2>
                            <div class="col-md-12 col-sm-12">
                                <div class="furniture-right">
                                    <div class="right-list-f">
                                        <ul>
                                            @if($datas)
                                                @foreach($datas as $data)
                                                    <li id="{{$data->id}}">
                                                        <a href="#">
                                                            {{$data->name}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('myScript')
    <script>
        $(document).ready(function(){
            $("li").click(function(){
                var id = this.id;
                //console.log(id);
                $.ajax({
                    type: 'get',
                    url: "{{route('addCar.category.save') }}" ,
                    data: {
                        id : id
                    },
                    success: function (data) {
                        console.log(data);
                        if(data.success == 1){
                            location.replace("{{ route('addCar.year') }}");
                        }
                    }, error: function (reject) {
                        //console.log(reject);
                    }
                });
            });
        });
    </script>
@endsection

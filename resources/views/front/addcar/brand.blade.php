@extends('layouts.site')

@section('title','design Page')


@section('content')

    <div style="direction: rtl; min-height: 500px;">
        <div class="terms-conditions product-page">
            <div class="terms-title">
                <div class="container">
                    <div class="row">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('addCar.image') }}">صور </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="furniture-box">
            <div class="container">
                <div class="row">
                    <div class="furniture-main">
                        <h2>الماركه</h2>
                            <div class="col-md-12 col-sm-12">
                                <div class="furniture-right">
                                    <div class="right-list-f">
                                        <ul>
                                            @if($brands)
                                                @foreach($brands as $brand)
                                                    <li id="{{$brand->id}}">
                                                        <a href="#"><img width="32" src="{{asset($brand->image)}}" alt="" />
                                                            {{$brand->name}}
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
                $.ajax({
                    type: 'get',
                    url: "{{route('addCar.brand.save') }}" ,
                    data: {
                        id : id
                    },
                    success: function (data) {
                        //console.log(data);
                        if(data.success == 1){
                            location.replace("{{ route('addCar.type') }}");
                        }
                    }, error: function (reject) {
                        //console.log(reject);
                    }
                });
            });
        });
    </script>
@endsection

@extends('layouts.app')

@section('js')


    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    @endsection
@section('content')
<div class="container">



        <div class="container-fluid">
            <div class="row">

                @foreach( $shops as $shop)
                <div class="list-group">
                    <a href="" class="list-group-item active blue-bg">

                        <div class="row">
                            <div class="col-sm-4">

                                <img src="image_shops/{{$shop->image}}" width="160" height="180" style="margin-top:10px;border-radius: 5px;">
                            </div>
                            <div class="col-sm-4" style="margin-left:45px; margin-top: 10px;">
                                <h5>
                                    {{$shop->name}}
                                </h5>
                                <h6>{{$shop->description}}</h6>
                            </div>
                        </div>

                        <button class="btn button-default custom-button" style="margin-bottom:30px;width: 30% ;border-radius: 30px;" href="">Like</button>

                    </a>

                </div>

                @endforeach


            </div>
        </div>

</div>
@endsection

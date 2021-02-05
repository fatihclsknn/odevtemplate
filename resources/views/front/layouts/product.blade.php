@extends('front.layouts.master')
@section('title','Ürünler')
@section('content')

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>URUNLERIMIZ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">

                        <span>We package the products with best services to make you a happy customer.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="http://via.placeholder.com/280?text=Product Image"/></i>
                            <h3>{{$product->ProductName}}</h3>
                            <span>{{$product->Price}}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

@endsection

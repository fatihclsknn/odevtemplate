@extends('front.layouts.master')
@section('title','Blog')
@section('content')


<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>blog</h2>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">

                    <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                <div class="news-box">
                    <figure><img src="http://via.placeholder.com/210x199?text=Blog Image" alt="img" /></figure>
                    <h3>{{$blog->Blog_Title}}</h3>
                    <span>{{$blog->date}}</span><span>Comment</span>
                    <p>{{$blog->Blog_content}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection

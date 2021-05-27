@extends('layouts.front-page')
@section('content')
<div class="top-wrapper">
<div class="container-fluid px-100 top-widget" id="News">
    <div class="row">
        <div class="col-sm-5 top-heading">
            <h1>Lorem ipsum dolor sit amet consect</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 top-news d-flex">
            <ul id="autoWidth" class="news-slider">
                @foreach($news_posts as $post)
                 <li>
            <div class="card news-card">
                <img class="card-img-top news-image" src="{!! $post['image'] !!}" alt="Card image cap">
                <div class="card-body news-body">
                  <h3 class="card-title news-title">{!! $post['title'] !!}</h3>
                  <p class="card-text news-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{!! $post['url'] !!}" class="btn float-right"><img src="/wp-content/themes/sage/resources/assets/images/arrow-pointing-to-right.svg" alt=""></a>
                </div>
              </div>
            </li>
              @endforeach
            </ul>
        </div>
    </div>
    <div class="figure"></div>
</div>
</div>
@include('partials/gallery-block')
@include('partials/form-block')
@endsection
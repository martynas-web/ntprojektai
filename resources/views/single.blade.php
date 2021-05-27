@extends('layouts.front-page')
@section('content')
<?php 
$title = get_the_title();
?>

<div class="single-page-container" style="background-image: url(https://source.unsplash.com/user/erondu/1600x900);">
<div class="container single-page-content h-100">
<div class="row single-page-row d-flex align-items-center h-100">
<div class="col-lg-6 col-md-12 col-sm-12 col-12 single-page-heading">
    <p><?php echo $title ?></p>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        <p>@php the_content() @endphp</p>
        </div>
    </div>
</div>
@endsection
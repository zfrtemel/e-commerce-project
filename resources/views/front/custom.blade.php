@extends('layouts.front')
@section('title', 'site title')
@section('breadcrumbs',$pages->page_title)

@section('content')


<div class="container">
    <h1 class="text-center">{{$pages->page_title}}</h1>

    <img class="rounded mx-auto d-block"src="{{$image->image_url}}"alt="Blog Image">
        
    

    <p class="section-description">

        {{$pages->page_content}}

    </p>

</div>
@endsection
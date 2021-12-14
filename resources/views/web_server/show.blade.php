@extends('layouts.app')

@section('meta_title', $seo['metaTitle'])
@section('meta_description', $seo['metaDescription'])

@section('content')
    <div class="container">
        <h1 class="text-center">Web server {{ $name }}</h1>
    </div>
@endsection

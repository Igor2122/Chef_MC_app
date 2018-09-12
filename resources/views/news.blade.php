{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

@extends('layouts.app')

@section('meta')
@endsection

@section('styles')
    <style>
    </style>
@endsection

@section('title')
@endsection

@section('content')
    <div class="content" id="root">
        <p>@{{ message }}</p>
        <example-component></example-component>
        <hr>
        <ul id="news">
            <li>Test</li>
            <li v-for="item in items">
                @{{ item.body }}
            </li>
        </ul>
            
    </div>
@endsection

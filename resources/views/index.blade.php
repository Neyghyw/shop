@extends('layouts.default_layout')

@section('Title', 'Welcome to BLOG!')

@section('Header')
    @include('layouts.components.header')
@show

@section('Main')
    @include('layouts.components.greeting')
@show

@section('Footer')
    @include('layouts.components.footer')
@show

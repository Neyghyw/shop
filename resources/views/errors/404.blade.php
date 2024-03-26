@extends('layouts.default_layout')

@section('Title', '404')

@section('Header')
    @include('layouts.components.header')
@show

@section('Main')
    @include('errors.components.greeting')
@show

@section('Footer')
    @include('layouts.components.footer')
@show

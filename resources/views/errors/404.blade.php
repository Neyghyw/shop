@extends('layouts.default_layout')

@section('Title', __('404 not found'))

@section('Header')
    @include('layouts.components.header')
@show

@section('Main')
    @include('errors.components.greeting')
@show

@section('Footer')
    @include('layouts.components.footer')
@show

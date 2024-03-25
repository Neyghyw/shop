@extends('layouts.default_layout')

@section('Title', 'DLS-shop')

@section('Header')
    @include('layouts.components.header')
@show

@section('Main')
    <div class="bg-white">
        <h1 class="text-center pt-12 text-4xl">{{ __("Products") }}</h1>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @empty($products)
                    {{ __("Products doesn't added") }}.
                @endempty
                @isset($products)
                    @foreach ($products as $product)
                        <a href="{{ route('product_card', $product) }}" class="group">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="https://kvadroshow.com/sites/default/files/news/pnevmokostyum_dns.jpg" class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-lg text-gray-700"> {{ $product -> name }} </h3>
                            <p><strong>{{ __("Price") }}:</strong> {{ $product -> price }} ₽ <strong> | {{ __("Category") }}:</strong> {{ $product -> category -> name }}</p>
                            <p><strong>{{ __("Brand") }}:</strong> {{ $product -> brand -> name }}</p>
                            <p></p>
                        </a>
                    @endforeach
                @endisset
            </div>
            <div class="mt-10">
                {{ $products }}
            </div>
        </div>
    </div>
@show

@section('Footer')
    @include('layouts.components.footer')
@show

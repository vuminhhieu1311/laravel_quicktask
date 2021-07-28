@extends('layouts.main')

@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <img src="{{ asset('images/' . $product->image) }}" class="product-pic">
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p class="product-description">{{ $product->description }}</p>
                            <h4 class="price">
                                {{ __('messages.product-price') }}: <span>${{ $product->price }}</span>
                            </h4>
                            <h5 class="price">
                                {{ __('messages.product-color') }}: <span>{{ $product->color }}</span>
                            </h5>
                            <h5 class="price">
                                {{ __('messages.product-material') }}: <span>{{ $product->material }}</span>
                            </h5>

                            <div class="action">
                                <a href="{{ route('products.edit', ['product' => $product->id]) }}">
                                    <button class="add-to-cart btn btn-default" type="button">
                                        {{ __('messages.update-product') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

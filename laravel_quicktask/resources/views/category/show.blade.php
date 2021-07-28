@extends('layouts.main')
@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <div class="panel panel-default">
                <p class="text-success">{{ Session::get('success', '') }}</p>
                <div class="panel-heading">
                    {{ __('messages.category') . ': ' . $category->name }}
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th>{{ __('messages.product-name') }}</th>
                                <th>{{ __('messages.product-category') }}</th>
                                <th>{{ __('messages.product-description') }}</th>
                                <th>{{ __('messages.product-image') }}</th>
                                <th>{{ __('messages.product-price') }}</th>
                                <th>{{ __('messages.product-color') }}</th>
                                <th>{{ __('messages.product-material') }}</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.show', ['category' => $category->id]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </td>
                                    <td>{{ $product->description }}</td>
                                    <td><img src="{{ asset('images/' . $product->image) }}" height="120" width="100">
                                    </td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->color }}</td>
                                    <td>{{ $product->material }}</td>
                                    <td>
                                        <button class="submit-btn">
                                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                                class="active styling-edit" ui-toggle-class="">
                                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a>
                                        </button>
                                        <form action="{{ route('products.destroy', ['product' => $product]) }}"
                                            method="post">
                                            @csrf
                                            @method("delete")
                                            <button type="submit" class="submit-btn"
                                                onclick="return confirm('{{ __('messages.delete-confirm') }}')">
                                                <i class="fa fa-times text-danger text"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
@endsection

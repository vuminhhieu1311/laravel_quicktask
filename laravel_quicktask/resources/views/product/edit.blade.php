@extends('layouts.main')

@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                {{ __('messages.update-product') }}
                            </header>
                            <p class="text-success">{{ Session::get('success', '') }}</p>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form" action="{{ route('products.update', ['product' => $product->id]) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('messages.product-name') }}*</label>
                                            <input type="text" data-validation="length" name="name" class="form-control"
                                                value="{{ $product->name }}" id="exampleInputEmail1">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('messages.product-price') }}*</label>
                                            <input type="text" name="price" class="form-control"
                                                value="{{ $product->price }}">
                                            @error('price')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="exampleInputPassword1">{{ __('messages.product-description') }}</label>
                                            <textarea style="resize: none" rows="8" class="form-control" name="description"
                                                id="ckeditor1">{{ $product->description }}</textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('messages.product-color') }}</label>
                                            <input type="text" data-validation="length" name="color" class="form-control"
                                                value="{{ $product->color }}" id="exampleInputEmail1">
                                            @error('color')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('messages.product-material') }}</label>
                                            <input type="text" data-validation="length" name="material" class="form-control"
                                                value="{{ $product->material }}" id="exampleInputEmail1">
                                            @error('material')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="exampleInputPassword1">{{ __('messages.product-category') }}*</label>
                                            <select name="category_id" class="form-control input-sm m-bot15"
                                                value="{{ $product->category->id }}">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('messages.product-image') }}*</label>
                                            <div>
                                                <img src="{{ asset('images/' . $product->image) }}" class="product-img">
                                            </div>
                                            <input type="file" name="image" id="image">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <button type="submit"
                                            class="btn btn-info">{{ __('messages.update-product') }}</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </div>
        </section>
    </section>
@endsection

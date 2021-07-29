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
                                {{ __('messages.update-category') }}
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form"
                                        action="{{ route('categories.update', ['category' => $category->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('messages.category-name') }}</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                value="{{ $category->name }}">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="exampleInputPassword1">{{ __('messages.category-description') }}</label>
                                            <textarea style="resize: none" rows="8" class="form-control" name="description"
                                                id=" exampleInputPassword1">{{ $category->description }}</textarea>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-info">{{ __('messages.update-category') }}</button>
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

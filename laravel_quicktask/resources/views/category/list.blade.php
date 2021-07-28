@extends('layouts.main')
@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <div class="table-agile-info">
                    <p class="text-success">{{ Session::get('success', '') }}</p>
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ __('messages.list-category') }}</div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.category-name') }}</th>
                                        <th>{{ __('messages.category-description') }}</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <button class="submit-btn">
                                                    <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                                        class="active styling-edit" ui-toggle-class="">
                                                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                                                    </a>
                                                </button>
                                                <form
                                                    action="{{ route('categories.destroy', ['category' => $category]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="submit-btn"
                                                        onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')">
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
                </div>
            </div>
        </section>
    </section>
@endsection

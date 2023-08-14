@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục /</span> Danh sách danh mục</h4>

    @if (session('success'))
    <div class="text-center" role="alert">
        <h4 class="alert alert-success">{{ session('success') }}</h4>
    </div>
    @endif
    @if (session('error'))
    <div class="text-center" role="alert">
        <h4 class="alert alert-danger">{{ session('error') }}</h4>
    </div>
    @endif
    @if (session('alert'))
    <div class="text-center" role="alert">
        <h4 class="alert alert-danger">{{ session('alert') }}</h4>
    </div>
    @endif

    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categories as $key => $category )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><strong>{{ $category->name }}</strong></td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <a class="dropdown-item" href="{{ route('category.edit', $category->id) }}">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                    </button>

                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <a class="dropdown-item" href="{{ route('category.delete', $category->id) }}"
                                            onclick="return myFunction();">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $categories->links() }}
    </div>
</div>
@endsection

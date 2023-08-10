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
    {{-- <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ( $categories as $key => $category )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><strong>{{ $category->name }}</strong></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('category.edit', $category->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i> Sửa</a>
                                    <a class="dropdown-item" href="{{ route('category.delete', $category->id) }}"
                                        onclick="return myFunction();"><i class="bx bx-trash me-1"></i>
                                        Xóa</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning ">
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>type</th>
                            <th>description</th>
                            <th>status</th>
                            <th>price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>Mobile</td>
                            <td>iPhone X 64Gb Grey</td>
                            <td class="process">Processed</td>
                            <td>$999.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-28 01:22</td>
                            <td>Mobile</td>
                            <td>Samsung S8 Black</td>
                            <td class="process">Processed</td>
                            <td>$756.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-27 02:12</td>
                            <td>Game</td>
                            <td>Game Console Controller</td>
                            <td class="denied">Denied</td>
                            <td>$22.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-26 23:06</td>
                            <td>Mobile</td>
                            <td>iPhone X 256Gb Black</td>
                            <td class="denied">Denied</td>
                            <td>$1199.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-25 19:03</td>
                            <td>Accessories</td>
                            <td>USB 3.0 Cable</td>
                            <td class="process">Processed</td>
                            <td>$10.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>Accesories</td>
                            <td>Smartwatch 4.0 LTE Wifi</td>
                            <td class="denied">Denied</td>
                            <td>$199.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-24 19:10</td>
                            <td>Camera</td>
                            <td>Camera C430W 4k</td>
                            <td class="process">Processed</td>
                            <td>$699.00</td>
                        </tr>
                        <tr>
                            <td>2018-09-22 00:43</td>
                            <td>Computer</td>
                            <td>Macbook Pro Retina 2017</td>
                            <td class="process">Processed</td>
                            <td>$10.00</td>
                        </tr>
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

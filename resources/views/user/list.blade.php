@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Người dùng /</span> Danh sách người dùng</h4>
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
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Ảnh</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Quyền</th>
                            <th>Phòng làm việc</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $users as $key => $user )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><strong>{{ $user->name }}</strong></td>
                            <td>{{ $user->email }}</td>
                            <td><img src="{{ asset('image/user' . $user->image) }}" alt=""></td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                @if ($user->role == 0)
                                <span class="badge bg-label-primary me-1">Nhân viên</span>
                                @elseif ($user->role == 1)
                                <span class="badge bg-label-success me-1">Quản lý</span>
                                @elseif ($user->role == 2)
                                <span class="badge bg-label-info me-1">Giám đốc</span>
                                @else
                                <span class="badge bg-label-warning me-1">Không xác định</span>
                                @endif
                            </td>
                            <td>{{ $user->department->name ?? '' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="item" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}"><i
                                                class="zmdi zmdi-edit mr-1"></i> Sửa</a>
                                        <a class="dropdown-item" href="{{ route('user.delete', $user->id) }}"
                                            onclick="return myFunction();"><i class="zmdi zmdi-delete mr-1"></i>
                                            Xóa</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $users->links() }}
        </div>
    </div>
    @endsection

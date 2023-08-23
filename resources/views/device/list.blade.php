@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Thiết bị /</span> Danh sách thiết bị</h4>
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
            <div class="table-responsive text-wrap table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Danh mục</th>
                            <th>Tên thiết bị</th>
                            <th>Ảnh</th>
                            <th>Màu sắc</th>
                            <th>Cấu hình</th>
                            <th>Trạng thái</th>
                            <th>Tình trạng</th>
                            <th>Giá nhập</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $devices as $key => $device )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $device->category->name ?? ''}}</td>
                            <td><strong>{{ $device->name }}</strong></td>
                            <td><img src="{{ asset('image/device/' . $device->image) }}" alt="" width="40px"
                                    height="40px">
                            </td>
                            <td>{{ $device->color }}</td>
                            <td>{{ $device->configuration }}</td>
                            <td>
                                @if ($device->status === 0)
                                <span class="badge badge-warning">Không có sẵn</span>
                                @else
                                <span class="badge badge-success">Có sẵn</span>
                                @endif
                            </td>
                            <td>
                                @if ($device->condition === 1)
                                <span class="badge badge-success">Bình thường</span>
                                @elseif ($device->condition === 0)
                                <span class="badge badge-danger">Đang hỏng</span>
                                @elseif ($device->condition === 2)
                                <span class="badge badge-secondary">Đang sửa chữa</span>
                                @elseif ($device->condition === 3)
                                <span class="badge badge-secondary">Đang bảo hành</span>
                                @else
                                <span class="badge badge-info">Không xác định</span>
                                @endif
                            </td>
                            <td>{{ $device->purchase_price }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="item" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        {{-- <a class="dropdown-item"
                                            href="{{ route('device.listSoftwareUsage', $device->id) }}">
                                            <i class="fab fa-app-store-ios mr-1"></i> Phần mềm được
                                            cấp</a> --}}
                                        <a class="dropdown-item" href="{{ route('device.edit', $device->id) }}">
                                            <i class="zmdi zmdi-edit mr-1"></i>
                                            Sửa</a>
                                        <a class="dropdown-item" href="{{ route('device.delete', $device->id) }}"
                                            onclick="return myFunction();"><i class="zmdi zmdi-delete mr-1"></i></i>
                                            Xóa</a>
                                        @if ($device->status === 1)
                                        <a class="dropdown-item"
                                            href="{{ route('device.liquidationForm', $device->id) }}">
                                            <i class="fas fa-dollar-sign mr-1" style="color: #2f5dac;"></i>
                                            Thanh lý</a>
                                        @endif
                                        @if($device->status == 0)
                                        <a class="dropdown-item"
                                            href="{{ route('device.updateAvailable', $device->id) }}"
                                            onclick="return confirmAction();">
                                            <i class="bx bx-edit-alt me-1" style="color: #2f5dac;"></i>
                                            Cập nhật có sẵn</a>
                                        @endif
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
            {{ $devices->links() }}
        </div>
    </div>
    @endsection

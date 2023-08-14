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
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên thiết bị</th>
                            <th>Ảnh</th>
                            <th>Màu sắc</th>
                            <th>Cấu hình</th>
                            <th>Tình trạng</th>
                            <th>Giá trị</th>
                            <th>Ngày mượn</th>
                            <th>Ngày dự kiến trả</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $devices as $key => $device )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><strong>{{ $device->device->name }}</strong></td>
                            <td><img src="{{ asset('image/device/' . $device->device->image) }}" alt="" width="40px"
                                    height="40px">
                            </td>
                            <td>{{ $device->device->color }}</td>
                            <td>{{ $device->device->configuration }}</td>

                            <td>
                                @if ($device->device->condition === 1)
                                <span class="badge bg-label-success me-1">Bình thường</span>
                                @elseif ($device->device->condition === 0)
                                <span class="badge bg-label-warning me-1">Đang hỏng</span>
                                @elseif ($device->device->condition === 2)
                                <span class="badge bg-label-warning me-1">Đang sửa chữa</span>
                                @elseif ($device->device->condition === 3)
                                <span class="badge bg-label-warning me-1">Đang bảo hành</span>
                                @else
                                <span class="badge bg-label-info me-1">Không xác định</span>
                                @endif
                            </td>
                            <td>{{ $device->device->purchase_price }}</td>
                            <td>{{ $device->useHistory->borrowed_date ?? '' }}</td>
                            <td>{{ $device->useHistory->return_date ?? '' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('request.showBorrowFormLicensekey', $device->device->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Yêu cầu
                                            cấp license key</a>
                                        <a class="dropdown-item"
                                            href="{{ route('request.reportDeviceBroken', $device->device->id) }}"
                                            onclick="return confirmAction();"><i class="bx bx-edit-alt me-1"></i> Báo
                                            hỏng</a>
                                        <a class="dropdown-item"
                                            href="{{ route('request.sendReturnRequest', $device->device->id) }}"
                                            onclick="return confirmAction();"><i class="bx bx-trash me-1"></i>
                                            Trả thiết bị</a>
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

@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Yêu cầu /</span> Danh sách yêu cầu thông báo thiết
        bị hỏng
    </h4>
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
            <div class="card">
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Phòng</th>
                                <th>Người gửi</th>
                                <th>Thể loại</th>
                                <th>Trạng thái</th>
                                <th>Kết quả</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $requests as $key => $req )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $req->department->name ?? '' }}</td>
                                <td><strong>{{ $req->user->name }}</strong></td>
                                <td>
                                    @if ($req->type == 0)
                                    <span class="badge bg-label-primary me-1">Trả thiết bị</span>
                                    @elseif ($req->type == 1)
                                    <span class="badge bg-label-success me-1">Mượn thiết bị</span>
                                    @elseif ($req->type == 2)
                                    <span class="badge bg-label-warning me-1">Báo hỏng</span>
                                    @elseif ($req->type == 3)
                                    <span class="badge bg-label-info me-1">Gia hạn phần mềm</span>
                                    @elseif ($req->type == 4)
                                    <span class="badge bg-label-info me-1">Cấp thiết bị</span>
                                    @else
                                    <span class="badge bg-label-warning me-1">Không xác định</span>
                                    @endif
                                </td>
                                <td>@if ($req->status == 0)
                                    <span class="badge bg-label-warning me-1">Chưa xử lý</span>
                                    @elseif ($req->status == 1)
                                    <span class="badge bg-label-success me-1">Đã xử lý</span>
                                    @else
                                    <span class="badge bg-label-warning me-1">Không xác định</span>
                                    @endif
                                </td>
                                <td>@if ($req->result === 0)
                                    <span class="badge bg-label-warning me-1">Từ chối</span>
                                    @elseif ($req->result == 1)
                                    <span class="badge bg-label-success me-1">Đồng ý</span>
                                    @else
                                    <span class="badge bg-label-warning me-1">Chưa xử lý</span>
                                    @endif
                                </td>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            @if($req->status != 1)
                                            <a class="dropdown-item"
                                                href="{{ route('request.approveRequest', $req->id) }}"
                                                onclick="return confirmAction();"><i
                                                    class="fas fa-check-double me-1"></i>
                                                Đồng ý</a>
                                            <a class="dropdown-item"
                                                href="{{ route('request.refuseRequest', $req->id) }}"
                                                onclick="return confirmAction();"><i
                                                    class="far fa-times-circle me-1"></i>
                                                Từ chối</a>
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
                {{ $requests->links() }}
            </div>
        </div>
        @endsection

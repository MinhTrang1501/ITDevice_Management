@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Yêu cầu /</span> Danh sách yêu cầu mượn thiết bị
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
            <div class="table-responsive table--no-card m-b-40 ">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Phòng</th>
                            <th>Người gửi</th>
                            <th>Thể loại</th>
                            <th>Ghi chú</th>
                            <th>Ngày dự kiến mượn</th>
                            <th>Trạng thái</th>
                            <th>Kết quả</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $requests as $key => $req )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $req->department->name }}</td>
                            <td><strong>{{ $req->user->name }}</strong></td>
                            <td>
                                @if ($req->type == 0)
                                <span class="badge bg-label-primary me-1">Trả thiết bị</span>
                                @elseif ($req->type == 1)
                                <span class="badge badge-success">Mượn thiết bị</span>
                                @elseif ($req->type == 2)
                                <span class="badge badge-warning">Báo hỏng</span>
                                @elseif ($req->type == 3)
                                <span class="badge badge-info">Gia hạn phần mềm</span>
                                @elseif ($req->type == 4)
                                <span class="badge badge-info">Cấp thiết bị</span>
                                @else
                                <span class="badge badge-warning">Không xác định</span>
                                @endif
                            </td>
                            <td>{{ $req->note }}</td>
                            <td>{{ $req->start_date }}</td>
                            <td>@if ($req->status == 0)
                                <span class="badge badge-warning">Chưa xử lý</span>
                                @elseif ($req->status == 1)
                                <span class="badge badge-success">Đã xử lý</span>
                                @else
                                <span class="badge badge-warning">Không xác định</span>
                                @endif
                            </td>
                            <td>@if ($req->result === 0)
                                <span class="badge badge-warning">Từ chối</span>
                                @elseif ($req->result == 1)
                                <span class="badge badge-success">Đồng ý</span>
                                @else
                                <span class="badge badge-warning">Chưa xử lý</span>
                                @endif
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button class="item" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        @if($req->status != 1)
                                        <a class="dropdown-item" href="{{ route('request.approveRequest', $req->id) }}"
                                            onclick="return confirmAction();"><i class="fas fa-check-double me-1"></i>
                                            Đồng ý</a>
                                        <a class="dropdown-item" href="{{ route('request.refuseRequest', $req->id) }}"
                                            onclick="return confirmAction();"><i class="far fa-times-circle me-1"></i>
                                            Từ chối</a>
                                        @endif

                                        @if ($req->result == 1 && $req->status == 1 && $req->type == 1)
                                        <a class="dropdown-item"
                                            href="{{ route('request.provideDeviceForm', $req->id) }}"><i
                                                class="fas fa-check-double me-1"></i>
                                            Cấp thiết bị</a>
                                        @endif

                                        @if($req->type == 4)
                                        <a class="dropdown-item"
                                            href="{{ route('request.formDelivered', $req->id) }}"><i
                                                class="far fa-check-circle me-1"></i> Đã lấy
                                            thiết
                                            bị</a>
                                        @endif


                                        @if ($req->result == 1 && $req->status == 1 && $req->type == 0)
                                        <a class="dropdown-item" href="{{ route('request.formReturned', $req->id) }}"><i
                                                class="far fa-check-circle me-1"></i> Đã trả
                                            thiết
                                            bị</a>
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

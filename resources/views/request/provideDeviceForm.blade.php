@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Yêu cầu /</span> Cấp thiết bị</h4>

    <div class="card">

        <form method="POST" action="{{ route('request.provideDevice') }}">
            @csrf
            <div class="card-body">
                <div>

                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">{{ __('Mã người gửi yêu
                            cầu')
                            }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask @error('user_id') is-invalid @enderror"
                                    placeholder="user_id" aria-label="user_id"
                                    aria-describedby="basic-icon-default-phone2" name="user_id"
                                    value="{{ $requests->user->id }}" required autocomplete="user_id" readonly />
                                @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">{{ __('Người gửi yêu
                            cầu')
                            }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask @error('user_id') is-invalid @enderror"
                                    placeholder="user_id" aria-label="user_id"
                                    aria-describedby="basic-icon-default-phone2" name=""
                                    value="{{ $requests->user->name }}" required autocomplete="user_id" readonly />
                                @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">{{ __('Phòng')
                            }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask @error('department_id') is-invalid @enderror"
                                    placeholder="department_id" aria-label="department_id"
                                    aria-describedby="basic-icon-default-phone2" name=""
                                    value="{{ $requests->department->name }}" required autocomplete="department_id"
                                    readonly />
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">{{ __('Mã phòng')
                            }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask @error('department_id') is-invalid @enderror"
                                    placeholder="department_id" aria-label="department_id"
                                    aria-describedby="basic-icon-default-phone2" name="department_id"
                                    value="{{ $requests->department->id }}" required autocomplete="department_id"
                                    readonly />
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">{{ __('Vị trí phòng')
                            }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask @error('department_id') is-invalid @enderror"
                                    placeholder="department_id" aria-label="department_id"
                                    aria-describedby="basic-icon-default-phone2" name=""
                                    value="{{ $requests->department->address }}" required autocomplete="department_id"
                                    readonly />
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">{{ __('Thiết bị')
                            }}</label>
                        <div class="col-sm-10">

                            <div class="input-group input-group-merge">
                                <button class="btn btn-outline-primary dropdown-toggle button-select" type="button"
                                    onClick="handleChangeSelect()" data-bs-toggle="dropdown" aria-expanded="false">Chọn
                                    thiết bị</button>
                                @if($devices->count() > 0)
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <select name="device_id[]" class="form-select select-device display-none"
                                        id="exampleFormControlSelect1" style="width: 300px"
                                        aria-label="Default select example" onchange="updateSelectedDevices()" multiple>

                                        @foreach ($devices as $device)

                                        <li class="dropdown-item">
                                            <option value="{{ $device->id }}" onclick="updateSelectedDevices(this)"
                                                style="height: 40px" class="d-flex align-items-center">{{
                                                $device->name }}</option>
                                        </li>
                                        @endforeach
                                    </select>
                                </ul>

                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    name="selected_devices" id="selected_devices" />
                                @else
                                <input type="text" id="basic-icon-default-phone"
                                    class="form-control phone-mask @error('department_id') is-invalid @enderror"
                                    placeholder="department_id" aria-label="department_id"
                                    aria-describedby="basic-icon-default-phone2" name=""
                                    value="Không có thiết bị nào có sẵn" readonly />
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">

                        <button type="submit" class="btn btn-outline-primary"
                            onclick="return confirmAction();">Cấp</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    var selectedDevices = [];

    function updateSelectedDevices(selectedOption) {
        var deviceId = selectedOption.value;
        var deviceName = selectedOption.text;

        if (selectedDevices.find(device => device.id === deviceId)) {
            selectedDevices = selectedDevices.filter(device => device.id !== deviceId);
        } else {
            selectedDevices.push({
                id: deviceId,
                name: deviceName
            });
        }

        var selectedDevicesText = selectedDevices.map(function(device) {
            return device.name;
        }).join(", ");

        var selectedDevicesId = selectedDevices.map(function(device) {
            return Number(device.id);
        });

        $('#selected_devices').val(selectedDevicesText);
        $('#exampleFormControlSelect1').val(selectedDevicesId);
    }
    function handleChangeSelect(){
        console.log(document.querySelector(".select-device").classList.toggle("display-block"))
    }
</script>

@endsection

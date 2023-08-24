@extends('layouts.app')

@section('content')
<div class="row">
    @if(Auth::user()->role > 0)
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <h3 class="title-2 m-b-40">Thiết bị</h3>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <h3 class="title-2 m-b-40">Tình trạng thiết bị</h3>
                <canvas id="polarChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <h3 class="title-2 m-b-40">Yêu cầu</h3>
                <canvas id="singelBarChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner">
                <h3 class="title-2 m-b-40">Thể loại yêu cầu</h3>
                <canvas id="doughutChart"></canvas>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@extends('layouts.master')
@section('css')

@section('title')
    إجازات القرآن
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    إجازات القرآن
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <h4 class="card-text text-dark">17</h4>
                            <h3>عدد الإجازات</h3>
                        </div>
                        <div class="float-right text-right">
                                     <span class="text-primary">
                                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> التفاصيل
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <h4 class="card-text text-dark">13</h4>
                            <h3>عدد الشيوخ</h3>
                        </div>
                        <div class="float-right text-right">
                                     <span class="text-primary">
                                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> التفاصيل
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection

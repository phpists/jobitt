@extends('admin.layouts.app')
@section('title')
    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Главная</h5>
@endsection
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            @include('admin.layouts.includes.messages')
            <h1>Hi, it's Jobitt admin panel</h1>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection

@section('js_after')
    <script src="{{ asset('super_admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('super_admin/js/pages/widgets.js') }}"></script>
    <script src="{{ asset('super_admin/js/product_question.js') }}"></script>
@endsection


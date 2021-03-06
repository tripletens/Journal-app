@extends('layouts.myapp')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-9">
            {{-- @include('ui.company-details') --}}

            @include('ui.view-news')

            {{-- @include('ui.company-services') --}}
            @include('ui.recent-publications')
        </div>
        {{-- <div class="col-md-6 col-lg-3">
            <div class="widget-bg-color-icon card-box fadeInDown animated">

            </div>
        </div> --}}
        @include('ui.search-nav-left')
        @include('ui.advert')
        @include('ui.countries')
    </div>
    @include('ui.company-services')
    @include('const.contact-form')
@endsection

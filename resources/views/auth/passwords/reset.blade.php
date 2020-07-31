@extends('layouts.myapp')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-9">
            @include('ui.reset-password')
            @include('ui.company-services')
            @include('ui.recent-publications')
        </div>
        @include('ui.search-nav-left')
        @include('ui.advert')
        @include('ui.countries')
    </div>
    @include('const.contact-form')
@endsection

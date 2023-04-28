@extends('main')

@section('title')
    Admin page
@endsection


@section('content')
    @if(URL::current() === url('/organisations'))
        @include('admin.manageOrganisation')
    @endif
    @if(URL::current() === url('/register'))
        @include('admin.createUser')
    @endif
@endsection


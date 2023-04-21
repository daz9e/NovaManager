@extends('main')

@section('title')
    Admin page
@endsection


@section('content')
    @include('admin.manageOrganisation')
    <div class="d-grid gap-2 col-6 mx-auto">
        <!-- Default -->
        <a href="{{route('organisations.createPage')}}" class="btn btn-secondary mb-4">
            Delete
        </a>
    </div>
@endsection


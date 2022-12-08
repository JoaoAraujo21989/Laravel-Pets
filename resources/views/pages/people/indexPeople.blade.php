@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.people.people-list', ['people' => $people])
    @endcomponent

@endsection

@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.pets.pets-list', ['pets' => $pets])
    @endcomponent

@endsection

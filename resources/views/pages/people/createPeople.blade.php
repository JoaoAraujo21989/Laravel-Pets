@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.people.person-form-create', ['address' => $address])
    @endcomponent

@endsection

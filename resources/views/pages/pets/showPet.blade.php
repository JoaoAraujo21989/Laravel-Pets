@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.pets.pet-form-show',['pet'=> $pet])
    @endcomponent

@endsection

@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.pets.pet-form-create' , ['person'=> $person])
    @endcomponent

@endsection

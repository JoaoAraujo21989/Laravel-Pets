@extends('master.main')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    @component('components.pets.pet-form-edit', ['pet' => $pet, 'person'=>$person])
    @endcomponent

@endsection

@extends('site.app-site')

@section('title', 'Login')

@section('content')
    <x-global.alert />
    @include('site.partials.form-login')
@endsection

@extends('site.app-site')

@section('content')
    <H1>Home</H1>
    @if (Auth::check())
        <p>{{ Auth::user()}}</p>
        <p>{{ Auth::user()->roles }}</p>
    @else
        <p>Usuário não logado</p>
    @endif
@endsection

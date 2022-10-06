@extends('layouts.app')

@section('content')
    @foreach($coins as $coin)
        {{ $coin->symbol }}
    @endforeach
@endsection

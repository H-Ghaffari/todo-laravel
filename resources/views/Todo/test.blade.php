@extends('layouts.master')

@section('content')
    @foreach ($fake as $f)
        <p>{{ $f->description }}</p>
        <hr class="border-blue-900">
    @endforeach
@endsection

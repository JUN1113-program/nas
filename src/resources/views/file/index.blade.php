@extends('layouts.default')

@section('content')
    @foreach ( $fileName as $item)
        <p>{{$item}}</p>
    @endforeach
@endsection
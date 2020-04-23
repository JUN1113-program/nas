@extends('layouts.default')

@section('content')
    @foreach ( $fileName as $item)
        <p>{{$item}}</p>
    @endforeach
    <a href={{route("files.create")}}>ファイルアップロード</a>
@endsection

<a href={{route("files.create")}}></a>

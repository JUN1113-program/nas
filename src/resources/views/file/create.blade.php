@extends('layouts.default')

<form method="POST" action="{{route("files.store")}}" enctype="multipart/form-data">
    @csrf
    <input type="file" id="file" name="file" class="form-control">
    <button type="submit">保存</button>
</form>

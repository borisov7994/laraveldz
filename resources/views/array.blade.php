@extends('layouts.main')
@section('content')

@for ($i = 0; $i < 1; $i++)
    <p>{{ @array->$id }}</p>
    <p>{{ @array->$title }}</p>
    <p>{{ @array->$price }}</p>
    <p>{{ @array->$path }}</p>
@endfor
@endsection

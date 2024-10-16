@extends('layouts.main')
@section('content')
@for ($i = 0; $i < 1; $i++)
<div class="flex flex-row justify-between">
    <p>{{ @array->$id }}</p>
    <p>{{ @array->$title }}</p>
    <p>{{ @array->$price }}</p>
    <p>{{ @array->$path }}</p>
</div>
@endfor
@endsection

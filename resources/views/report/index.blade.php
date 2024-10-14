@extends('layouts.main')
@section('content')
@foreach($reports as $report)
    <div class="flex justify-between items-center my-2 p-2 border-b">
        <p class="flex-1">{{ $report->description }}</p>
        <p class="flex-none">{{ $report->number }}</p>
        <p class="flex-none">{{ $report->created_at }}</p>
        <p class="flex-none">{{ $report->updated_at }}</p>
    </div>
@endforeach
@endsection

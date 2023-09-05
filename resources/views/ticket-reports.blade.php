@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Query Reports</h1>
    <form method="POST" action="{{ route('query.generate-report') }}">
        @csrf
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Generate Report</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Query Report Results</h1>
    @if ($ticketReports && count($ticketReports) > 0)
    <table class="table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date Logged</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ticketReports  as $ticket)
        <tr>
            <td>first name here</td>
            <td>last name here</td>
            <td>{{ $ticket->created_at }}</td>
            <td>{{ $ticket->status }}</td>
            <td>
                <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('tickets.sendEmail', $ticket->id) }}" class="btn btn-success">Send Email</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $ticketReports->links() }}
    @else
    <p>No results found.</p>
    @endif
</div>
@endsection

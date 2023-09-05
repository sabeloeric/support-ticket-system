<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


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
        </tr>
        </thead>
        <tbody>
        @foreach ($ticketReports  as $ticket)
        <tr>
            <td>first name here</td>
            <td>last name here</td>
            <td>{{ $ticket->created_at }}</td>
            <td>{{ $ticket->status }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $ticketReports->links() }}
    @else
    <p>No results found.</p>
    @endif
</div>


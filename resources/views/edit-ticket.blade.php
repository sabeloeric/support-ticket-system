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
    <h1>Edit Ticket</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('tickets.edit', $ticket->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category" required>
                <option value="Sales" {{ $ticket->category === 'Sales' ? 'selected' : '' }}>Sales</option>
                <option value="Accounts" {{ $ticket->category === 'Accounts' ? 'selected' : '' }}>Accounts</option>
                <option value="IT" {{ $ticket->category === 'IT' ? 'selected' : '' }}>IT</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ $ticket->subject }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $ticket->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="newly_logged" {{ $ticket->status === 'newly logged' ? 'selected' : '' }}>New</option>
                <option value="in_progress" {{ $ticket->status === 'in progress' ? 'selected' : '' }}>In Progress</option>
                <option value="resolved" {{ $ticket->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

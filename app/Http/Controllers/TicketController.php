<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        return view('create-ticket');
    }

    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'category' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        // Create a new ticket
        $ticket = new Ticket([
            'category' => $request->input('category'),
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
        ]);

        $ticket->save();

        // Show a success message
        return redirect('tickets/create')->with('success', 'Ticket created successfully.');
    }

    public function edit(Ticket $ticket, Request $request)
    {
        $request->validate([
            'status' => 'required|in:newly_logged,in_progress,resolved',
        ]);

        $ticket->update(['status' => $request->input('status')]);

        return redirect()->route('tickets.edit', $ticket->id)->with('success', 'Ticket updated successfully.');
    }

    public function editPage(Ticket $ticket)
    {
        return view('edit-ticket', compact('ticket'));
    }
}

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
}

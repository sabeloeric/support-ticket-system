<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class QueryReportController extends Controller
{
    public function index()
    {
        return view('ticket-reports');
    }

    public function generateReport(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $ticketReports = Ticket::whereBetween('created_at', [$startDate, $endDate])->orderBy('created_at')->paginate(10);

        return view('ticket-report-results', compact('ticketReports'));
    }
}

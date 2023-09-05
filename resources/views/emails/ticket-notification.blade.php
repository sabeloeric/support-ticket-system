@component('mail::message')
# Ticket Notification

Hello {{ $ticket->user->name }},

Your ticket with the subject "{{ $ticket->subject }}" has been updated.

To view the ticket, click the button below:

@component('mail::button', ['url' => route('tickets.edit', $ticket->id)])
View Ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


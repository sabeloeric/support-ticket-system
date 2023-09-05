# Support Ticket System
Support Ticket System is a web-based application built with Laravel for managing support tickets. It allows users to log support tickets, track ticket status, and generate query reports.

## Mail Server Setup
### Using Mailtrap.io
To use Mailtrap.io as your mail server for development, follow these steps:

Sign up for a [Mailtrap.io](mailtrap.io) account.

Log in to your Mailtrap.io account and create a new inbox.

In your .env file, set the following mail settings:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mailtrap-username
MAIL_PASSWORD=your-mailtrap-password
MAIL_ENCRYPTION=tls
```

Replace your-mailtrap-username and your-mailtrap-password with your Mailtrap.io credentials.

Now, your Laravel application will use Mailtrap.io as the mail server for sending emails during development.

# Usage
## Logging In
- Visit http://localhost:8000/login to access the login page.

default user credentials:
```
email: support_agent@test.com
password: password

email: support_manager@test.com
password: password
```

## Creating Support Tickets
- After logging in, users can create support tickets by clicking "Create Ticket" in the navigation menu.

## Query Reports

- Users can access query reports by clicking "Query Reports" in the navigation menu.
Select date ranges and generate reports.

## Ticket Status
- A support manager can send an email to a user to notify them that their ticket status has changed.

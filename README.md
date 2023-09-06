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

<img width="993" alt="image" src="https://github.com/sabeloeric/support-ticket-system/assets/48094027/a865c6a9-28a3-47ed-84a8-30d6db27a8d6">

<img width="993" alt="image" src="https://github.com/sabeloeric/support-ticket-system/assets/48094027/e009dda8-78fe-45fd-81d4-7faa953055fa">

<img width="993" alt="image" src="https://github.com/sabeloeric/support-ticket-system/assets/48094027/c69ff189-9626-4564-b7c8-c95ab36aab21">

<img width="993" alt="image" src="https://github.com/sabeloeric/support-ticket-system/assets/48094027/df120e76-ccd6-4767-ab4a-4a5c4ca9c963">


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

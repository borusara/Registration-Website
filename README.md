# Event Registration App

This is a simple PHP-based Event Registration application that allows users to register for an event by providing their Telegram name and username. Upon submission, the form sends an SMS notification to a specified phone number using the Twilio API.

## Setup and Deployment

To deploy this application to both Render and Heroku, follow these steps:

### 1. Prerequisites

Before starting, make sure you have the following installed:

- Docker (for local image building and testing)
- Git (for version control and deployment)

### 2. Clone the Repository

```bash
git clone https://github.com/boruasa/Registration-Website
cd your-repo
```

### 3. Deploy To Render

[![Deploy to Render](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=https://github.com/borusara/Registration-Website)
<h1>Replace Twilio Credentials  </h1>
<p>Open the index.php file and replace the following variables with your Twilio credentials </p>

```
$twilioAccountSid = 'YOUR_TWILIO_ACCOUNT_SID';
$twilioAuthToken = 'YOUR_TWILIO_AUTH_TOKEN';
$twilioPhoneNumber = 'YOUR_TWILIO_PHONE_NUMBER';
$yourPhoneNumber = 'YOUR_PHONE_NUMBER';
```


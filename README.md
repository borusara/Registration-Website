<p align="center">
<img src="https://readme-typing-svg.herokuapp.com?color=1C71FA&width=420&lines=This+is+an;Event+Registration+Website;Made+By+Akatsukis;For+Devs+Lab;You+Can+use+replit;Or+Heroku+or+Render;This+Project+Is+Under+Gnu+License">
</p>

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
## Demo Screenshots

### Desktop View

![Desktop View](https://telegra.ph//file/257ae8b9c833cf3962c96.jpg)

### Mobile View

![Mobile View](https://telegra.ph//file/bd1b1fe036ba82a3c72cb.jpg)

<P>Demo: https://quizzicalwigglyintranet.aneekbiswas5.repl.co/ </P>

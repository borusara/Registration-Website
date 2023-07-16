<?php
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Set your Twilio credentials
$twilioAccountSid = 'AC509fa65914e51c4e859cfaf81c9c05b6';
$twilioAuthToken = 'd5ec535d8011b50a8854ab9f4b809a97';
$twilioPhoneNumber = '+16188275832';

// Set your phone number where you want to receive the SMS
$yourPhoneNumber = '+918870801331';

// Initialize variables
$errorMessage = '';
$successMessage = '';

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted data
    $telegramName = $_POST['telegram_name'];
    $telegramUsername = $_POST['telegram_username'];

    // Construct the SMS message
    $messageBody = "Event Registration\nTelegram Name: $telegramName\nTelegram Username: $telegramUsername";

    // Create a new Twilio client
    $client = new Client($twilioAccountSid, $twilioAuthToken);

    try {
        // Send the SMS message
        $message = $client->messages->create(
            $yourPhoneNumber,
            [
                'from' => $twilioPhoneNumber,
                'body' => $messageBody
            ]
        );

        // Show success message and redirect to t.me/devslab after a few seconds
        $successMessage = 'Thank you for registering. Redirecting to t.me/devslab...';
        header('Refresh: 5; URL=https://t.me/devslab');
        exit;
    } catch (Exception $e) {
        // Show error message if SMS sending fails
        $errorMessage = 'Failed to send SMS. Please try again later.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }

        .container {
            max-width: 500px;
            background-color: #444;
            padding: 20px;
            border-radius: 5px;
            margin: auto; /* Center the container horizontally */
            margin-top: 3rem;
        }

        .form-group label {
            color: #fff;
        }

        .form-control {
            background-color: #555;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .dark-mode {
            background-color: #343a40;
            color: #fff;
        }

        .dark-mode .container,
        .dark-mode .form-group label,
        .dark-mode .form-control {
            background-color: #444;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-right mb-3">
            <button id="mode-toggle" class="btn btn-link">
                <svg id="mode-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                    <path d="M7.5 1A7.5 7.5 0 0 0 0 8.5c0 4.136 3.364 7.5 7.5 7.5a7.5 7.5 0 0 0 0-15zm0 1C3.916 2 1.5 4.416 1.5 8.5S3.916 15 7.5 15 13.5 12.584 13.5 8.5 11.084 2 7.5 2zm2 3a1 1 0 1 0-2 0v1a1 1 0 0 0 2 0V5z"/>
                </svg>
            </button>
        </div>

        <h1 class="mb-4">Event Registration</h1>

        <?php if ($errorMessage !== ''): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <?php if ($successMessage !== ''): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="telegram_name">Telegram Name:</label>
                <input type="text" class="form-control" name="telegram_name" required>
            </div>

            <div class="form-group">
                <label for="telegram_username">Telegram Username:</label>
                <input type="text" class="form-control" name="telegram_username" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
  // Check if dark mode is enabled and update the UI accordingly
  function updateDarkModeUI() {
    const body = document.querySelector('body');
    const container = document.querySelector('.container');
    const formGroupLabels = document.querySelectorAll('.form-group label');
    const formControls = document.querySelectorAll('.form-control');
    const modeIcon = document.getElementById('mode-icon');

    if (localStorage.getItem('darkMode') === 'true') {
      body.classList.add('dark-mode');
      container.classList.add('dark-mode');
      formGroupLabels.forEach((label) => label.classList.add('dark-mode'));
      formControls.forEach((control) => control.classList.add('dark-mode'));
      modeIcon.classList.remove('bi-moon');
      modeIcon.classList.add('bi-sun');
    } else {
      body.classList.remove('dark-mode');
      container.classList.remove('dark-mode');
      formGroupLabels.forEach((label) => label.classList.remove('dark-mode'));
      formControls.forEach((control) => control.classList.remove('dark-mode'));
      modeIcon.classList.remove('bi-sun');
      modeIcon.classList.add('bi-moon');
    }
  }

  // Toggle dark mode and update the UI
  function toggleDarkMode() {
    const currentMode = localStorage.getItem('darkMode') === 'true';
    localStorage.setItem('darkMode', !currentMode);
    updateDarkModeUI();
  }

  // Attach event listener to mode toggle button
  const modeToggle = document.getElementById('mode-toggle');
  modeToggle.addEventListener('click', toggleDarkMode);

  // Update the UI on initial page load
  updateDarkModeUI();
</script>

</body>
</html>

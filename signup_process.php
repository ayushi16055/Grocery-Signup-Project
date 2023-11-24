<?php
// Process signup form data

// Validate reCAPTCHA
$recaptcha_secret = '6LdYoBcpAAAAAMIWMFoDAAGYF4m0vkOammf8F18k';
$response = $_POST['g-recaptcha-response'];
$remoteip = $_SERVER['REMOTE_ADDR'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response&remoteip=$remoteip";
$recaptcha_data = json_decode(file_get_contents($url));

if ($recaptcha_data->success) {
    // If reCAPTCHA validation is successful, process further
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform additional validation and database operations if needed

    // For demonstration purposes, redirecting to a homepage dashboard and displaying the user's full name
    header("Location: dashboard.php?fullname=$fullname");
    exit();
} else {
    // If reCAPTCHA validation fails, handle the error accordingly
    echo "reCAPTCHA verification failed.";
}
?>

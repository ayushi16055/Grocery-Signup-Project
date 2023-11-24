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

    // Establish a connection to the MySQL database
    $servername = "localhost"; // Change this to your MySQL server name if different
    $username = "root"; // Change this to your MySQL username
    $password_db = ""; // Change this to your MySQL password if set
    $dbname = "mysql"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL statement to insert user data into a table
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a homepage dashboard and pass the user's full name as a parameter
        header("Location: dashboard.php?fullname=$fullname");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Close the database connection
} else {
    // If reCAPTCHA validation fails, handle the error accordingly
    echo "reCAPTCHA verification failed.";
}
?>

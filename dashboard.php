<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark justify-content-center">
    <div class="container d-flex justify-content-center">
      <h2 style="color: white">Dashboard</h2>
    </div>
  </nav>
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-center"> <!-- Updated: Added 'text-center' class -->
            <?php
            // Retrieve the full name from the URL parameter
            if (isset($_GET['fullname'])) {
              $fullname = $_GET['fullname'];

              // Display the full name on the dashboard
              echo "<h4>Welcome, $fullname!</h4>";
            } else {
              // Handle if full name parameter is not present
              echo "<p>Full name not found.</p>";
            }
            ?>
            <!-- Other dashboard content can be placed here -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

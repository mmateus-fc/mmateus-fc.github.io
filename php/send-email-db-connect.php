<?php
    echo "<p>Trying to connect to the database.</p>";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_development";

// Creates connection
$conn = mysqli_connect(hostname: $servername, 
                    username: $username,
                    password: $password, 
                    database: $dbname);

if (mysqli_connect_errno()) // return 0 if connection did not failed
{
    die("<p>Connection error: " . mysqli_connect_error(). "</p>");
}
else
{
    echo "<p>Connection successful!<p>";

    include('send-email-submit-inquiry.php');

    // close connection
    $conn->close();
}

echo "<p>End Connection</p>";
?>


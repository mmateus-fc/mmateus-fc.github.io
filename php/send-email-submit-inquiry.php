<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitting Inquiry</title>
</head>
<body>
    <h1>Adding Post</h1>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];

        $sql = "INSERT INTO inquires (name, email, subject, content)
                        VALUES ('$name', '$email', '$subject', '$content')";

        // Execute SQL query
        if (mysqli_query($conn, $sql)) {
            echo "<p>Post Added successfully!</p>";
            // Redirect to a specific HTML page
            header('Location: ../send-email-result.html');
            exit(); // Stop executing the current script

        } 
        else 
        {
            // Print error message
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
            echo "<p>Error: Form not submitted.</p>";
        }
    }

    ?>

</body>
</html>

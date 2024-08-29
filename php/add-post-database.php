<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitting Post</title>
</head>
<body>
    <h1>Adding Post</h1>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $title = $_POST['title'];
        $content = $_POST['content'];

        // check file
        echo "<p>File</p>";
        echo "<p>Is file on it?" . (isset($_FILES['image']) ? 'Yes' : 'No') . "</p>";

        echo "<p>FILES</p>";
        print_r($_FILES);

        // Check if an image was uploaded
        if ($_FILES['image']['error'] != 4) {
            // image properties
            $file = $_FILES['image'];
            echo "<p>file</p>";
            print_r($file);;

            $file_name = $_FILES['image']['name'];
            $file_name_tmp = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            $file_error = $_FILES['image']['error'];
            $file_type = $_FILES['image']['type'];

            $file_ext = explode('.', $file_name); // get type file
            $file_actual_ext = strtolower(end($file_ext)); // get the last element of the array

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($file_actual_ext, $allowed)) 
            {
                if ($file_error === 0) 
                {
                        $file_name_new = uniqid('', true) . "." . $file_actual_ext;
                        $file_destination = '../images-upload-blog/' . $file_name_new;
                        move_uploaded_file($file_name_tmp, $file_destination);
    
                        // Escape special characters in the content
                        $title_escaped = mysqli_real_escape_string($conn, $title);
                        $content_escaped = mysqli_real_escape_string($conn, $content);
                        $file_destination_escaped = mysqli_real_escape_string($conn, $file_destination);

                        // Construct the SQL query with escaped values
                        $sql = "INSERT INTO blog_posts (title, content, image_url)
                                VALUES ('$title_escaped', '$content_escaped', '$file_destination_escaped')";
    
                        echo "Post Submited!";

                        // Execute SQL query
                        if (mysqli_query($conn, $sql)) {
                            echo "<p>Post Added successfully!</p>";
                            // Redirect to a specific HTML page
                            header('Location: ../add-post-success.html');
                            exit(); // Stop executing the current script

                        } 
                }
                else 
                {
                    echo "There was an error uploading your file!";
                }
            } 
            else 
            {
                echo "You cannot upload files of this type!";
            }

        } else {
            // Handle the case where no image was uploaded
            echo "<p>No image uploaded.</p>";
            $file_destination = null;

            $sql = "INSERT INTO blog_posts (title, content, image_url)
            VALUES ('$title', '$content', '$file_destination')";

            echo "<p>Post Submited!</p>";
            
            
            // Execute SQL query
            if (mysqli_query($conn, $sql)) {
                echo "<p>Post Added successfully!</p>";
                // Redirect to a specific HTML page
                header('Location: ../add-post-success.html');
                exit(); // Stop executing the current script

            } 
        }  


    }
    else 
    {
        // Print error message
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
        echo "<p>Error: Form not submitted.</p>";
    }
    ?>
</body>
</html>

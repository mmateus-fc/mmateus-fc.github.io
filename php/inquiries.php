<?php
    include_once 'connection.php';

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta 
        charset="utf-8"
        name="viewport" 
        content="width=device-width"
    >
    
    <title> 
        Send Email
    </title>

    <link
        href = '../css/reset.css'
        rel = 'stylesheet'
        type= 'text/css'        
    >
    
    <link
        href = '../css/background-blog.css'
        rel = 'stylesheet'
        type= 'text/css'
    >

    <link
        href = '../css/inquiries.css'
        rel = 'stylesheet'
        type= 'text/css'
    >

    <!-- Icons: FontAwesome-->
    <script src="https://kit.fontawesome.com/8a7c27490c.js" crossorigin="anonymous"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Inter:wght@100..900&family=Kaushan+Script&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Satisfy&display=swap" rel="stylesheet">

    
</head>

<body>
    <div
        class="container">
        <header>
            <nav>
                <ul
                    class="inline-list">
                    <li>
                        <a href="../home.html">Home</a>
                    </li>
                    <li>
                        <a href="../aboutme.html">About Me</a>
                    </li>
                    <li>
                        <a href="../education.html">Education</a>
                    </li>
                    <li>
                        <a href="../research.html">Research</a>
                    </li>                   
                    <li>
                        <a href="../experience.html" >Experience</a>
                    </li>
                    <li>
                        <a href="../skills.html">Skills and Achievements</a>
                    </li>
                    <li>
                        <a href="../portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="../cv.html">CV</a>
                    </li>
                    <li>
                        <a href="../contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <?php 
                        if (isset($_SESSION['User_ID'])) {
                            // User is logged in
                        ?>
                            <li>
                                <a href="Admin.php">Admin</a>
                            </li>
                            <li>
                                <a href="inquiries.php">Inquiries</a>
                            </li>
                        <?php
                        } 
                    ?>
                </ul>
            </nav>
        </header>
    
        <article
            id="main">

            <div
                class="container-inquiries">
            
                <?php
                    $sql = "SELECT * FROM inquires";
                    $result = mysqli_query($conn, $sql);    
                    $resultCheck = mysqli_num_rows($result);

                    // Initialize an empty array to store the fetched data
                    $data = array();
                    
                    if($resultCheck > 0)
                    {
                        // Fetch rows from the result set and store them in the $data array
                        while ($row = mysqli_fetch_assoc($result)) 
                        {
                            // Append each row to the $data array
                            $data[] = $row;
                        }

                        // Free the result set
                        mysqli_free_result($result);

                        // Bubble sort algorithm to sort the array of arrays by datetime in descending order
                        function bubbleSortByDateTime(&$data) {
                            $n = count($data);
                            for ($i = 0; $i < $n - 1; $i++) {
                                for ($j = 0; $j < $n - $i - 1; $j++) {
                                    // Swap if the datetime of the current element is less than the next one
                                    if ($data[$j]['date_time'] < $data[$j + 1]['date_time']) {
                                        $temp = $data[$j];
                                        $data[$j] = $data[$j + 1];
                                        $data[$j + 1] = $temp;
                                    }
                                }
                            }
                        }

                        // Call the sorting function
                        bubbleSortByDateTime($data);

                        // Output the sorted array of arrays in HTML table format
                        echo "<table class='styled-table'>";
                        echo "<thead><tr><th>Name</th><th>Email</th><th>Subject</th><th>Datetime</th></tr></thead>";
                        echo "<tbody>";
                        foreach ($data as $entry) {
                            echo "<tr>";
                            echo "<td>" . $entry['name'] . "</td>";
                            echo "<td>" . $entry['email'] . "</td>";
                            echo "<td>" . $entry['subject'] . "</td>";
                            echo "<td>" . $entry['date_time'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    }
                ?>
            </div>

        </article>
    
        <footer>
            <section>
                <nav>
                    <a href = "../home.html">Home</a>
                </nav>
            </section>
            <section>
                <em>
                    Mateus Franco e Cunha 2024 &copy  
                    <!-- 
                        Symbol | Representation
                            ©           &copy
                    -->
                </em>
            </section>
        </footer>        
    </div>
</body>
</html>


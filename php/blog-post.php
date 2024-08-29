<?php
    include_once 'connection.php';

    $sql = "SELECT * FROM blog_posts";
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

        // Output the sorted array of arrays in HTML format
        foreach ($data as $entry) {
            echo '<div class="post-each">';
            echo '<h1>' . $entry['title'] . '</h1>';
            echo '<p>' . $entry['content'] . '</p>';
            echo '<img src="' . $entry['image_url'] . '" alt="image-preview">';
            echo '</div>';
        }
    }
                
?>

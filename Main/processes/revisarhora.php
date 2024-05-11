<?php
include('../config/db.php'); // Assuming db.php contains the database connection code

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if Username is set and not empty
    if (isset($_POST["Username"]) && !empty($_POST["Username"])) {
        // Sanitize input to prevent SQL injection
        $rut = mysqli_real_escape_string($conn, $_POST["Username"]);

        // Query to retrieve data from the database
        $query = "SELECT datetime, exam_type, exam_department FROM exams WHERE rut = '$rut'";
        
        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if query executed successfully
        if ($result) {
            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
                // Fetch and display the rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Datetime: " . $row['datetime'] . ", Exam Type: " . $row['exam_type'] . ", Exam Department: " . $row['exam_department'] . "<br>";
                }
            } else {
                echo "No exams found for the provided RUT.";
            }
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }

        // Free result set
        mysqli_free_result($result);

        // Close connection
        mysqli_close($conn);
    } else {
        echo "RUT not provided.";
    }
} else {
    echo "Form not submitted.";
}
?>

<?php

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$host = "localhost";
$port = "5050";  // Default port for PostgreSQL
$dbname = "BD_Full";
$user = "postgres";
$password = "admin";

try {
  // Connect to the database
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    if (!$conn) {
        debug_to_console("pico");
        die("Connection failed: " . pg_last_error());
    }

    // Function to execute a query and return the results (replace with your actual logic)
    function get_patient_profile($conn, $patient_id) {
        $sql = "SELECT * FROM Patients WHERE patient_id = $1";
        $result = pg_query_params($conn, $sql, array($patient_id));
        $data = pg_fetch_assoc($result);  // Fetch associative array with results
        return $data;
    }

    // Example usage (assuming you have the patient ID from user input)
    $patient_id = $_POST["patient_id"];

    $patient_data = get_patient_profile($conn, $patient_id);

    if ($patient_data) {
        // Process and display retrieved patient data (replace with your HTML logic)
        echo "Patient Name: " . $patient_data["first_name"] . " " . $patient_data["last_name"];
    } else {
        echo "Patient not found";
    }

    } catch (Exception $e) {
    die("Error: " . $e->getMessage());
    } finally {
    if ($conn) {
        pg_close($conn);  // Close connection
    }
    }

?>

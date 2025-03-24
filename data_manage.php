<?php
include('database_connection.php');

if(isset($_POST['Submit'])){
    // Ensure the connection variable is correct
    if (!$conn) {
        die("Database connection error: " . mysqli_connect_error());
    }

    // Ensure the input is sanitized
    $fullname = mysqli_real_escape_string($conn, $_POST['full_name']);

    // Validate the input (check if the name is empty)
    if(!empty($fullname)){
        $QUERY = "INSERT INTO eid_invitations (Full_Name) VALUES ('$fullname')";
        $run = mysqli_query($conn, $QUERY);

        if ($run) {
            echo "success"; // AJAX will detect this and show the card
        } else {
            echo "error";
        }
    } else {
        echo "invalid";
    }
}
?>

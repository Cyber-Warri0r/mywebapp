<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $comment = $_POST['comment'];

    // Define the file path where you want to save the data
    $file = "submissions.txt";

    // Open the file in append mode
    $handle = fopen($file, "a");

    // Check if the file was opened successfully
    if ($handle) {
        // Format the data and write it to the file
        $data = "Name: $name, Email: $email, Password: $password, Comment: $comment\n";
        fwrite($handle, $data);

        // Close the file
        fclose($handle);
        echo "Message sent successfully!";
    } else {
        echo "Error: Unable to open file.";
    }
} else {
    echo "Invalid request.";
}
?>

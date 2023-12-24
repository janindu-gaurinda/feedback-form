<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect('localhost', 'root', '', 'ceylon paradies');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Add code to validate email and password from another table
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Email and password are correct, proceed to insert data into feedback table
        $name = $_POST['name'];
        $rate = $_POST['rate'];
        $date = $_POST['date'];
        $feedback_msg = $_POST['feedback_msg'];

        $sql = "INSERT INTO feedback (name, email, rate, date, feedback_msg) VALUES 
        ('$name', '$email', $rate, '$date', '$feedback_msg')";

if (mysqli_query($conn, $sql)) {
    // Display a success message using a JavaScript alert
    echo "<script>alert('Feedback submitted successfully.');</script>";
    
    // Redirect to the feedback page after the user clicks OK
    echo "<script>window.location.href = './feedback.php';</script>";
} else {
    // Display a database error message
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
// Email and password are incorrect, display an error message using a JavaScript alert
echo "<script>alert('Incorrect email or password. Please try again.');</script>";

// Redirect to another page after the user clicks OK
echo "<script>window.location.href = './feedback_form.html';</script>";
}

mysqli_close($conn);
} else {
echo "Form not submitted.";
}

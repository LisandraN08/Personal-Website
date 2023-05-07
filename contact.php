<?php
//
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  
// membuat koneksi ke database
include 'connection.php';
// menangkap data dari form
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// memvalidasi data
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "Please fill out all fields.";
} else {
    // menyimpan data ke database
    $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Your message has been sent. Thank you!'); window.location.replace('http://localhost/Personal%20Website/inner-page.html');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    } 
}



// menutup koneksi ke database
mysqli_close($conn);
  
?>

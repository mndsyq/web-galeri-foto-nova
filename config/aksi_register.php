<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $us = $_POST['us'];
    $p = $_POST['pass'];
    $em = $_POST['em'];
    $nml = $_POST['nml'];

    // Perform validation/sanitization here

    // Check if user exists
    $stmt = $koneksi->prepare("SELECT * FROM user WHERE Username = ? OR Email = ?");
    $stmt->bind_param("ss", $us, $em);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<script>alert("Data lo terdaftar!")</script>';
        header("location: ../login.php");
    } else {
        // Hash the password
        

        // Insert new user into the database
        $stmt = $koneksi->prepare("INSERT INTO user (Username, Password, Email, NamaLengkap) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $us, $p, $em, $nml);
        $stmt->execute();

        // Redirect or display success message
        echo '<script>alert("Registration successful!")</script>';
        header('Location: ../login.php');
    }
}
?>
<?php
// This MUST be the very first line of the file being included
session_start();

// Check if the user is NOT logged in
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    
    // Redirect them immediately to the sign-in page
    header("Location: signin.html");
    exit(); 
}
// If the user is logged in, the script continues and loads the page content.
?>
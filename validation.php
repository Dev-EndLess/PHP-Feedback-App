<?php

// Form Submit
if (isset($_POST['submit'])) {

  // First name Validation
  if(empty($_POST['first_name'])) {
      $first_name_error = 'First name is required';
  } else {
      $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // Last name Validation
  if(empty($_POST['last_name'])) {
      $last_name_error = 'Last name is required';
  } else {
      $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // Email Validation
  if(empty($_POST['email'])) {
      $email_error = 'Email is required';
  } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // Body Validation
  if(empty($_POST['body'])) {
      $body_error = 'Feedback is required';
  } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($first_name_error) && empty($last_name_error) && empty($email_error) && empty($body_error)) {
      // add to database
      $sql = "INSERT INTO feedback (first_name, last_name, email, body) VALUES ('$first_name', '$last_name', '$email', '$body')";
      if (mysqli_query($conn, $sql)) {
          // Success
          // header('Location: feedback.php');
          echo "<meta http-equiv='refresh' content='0;url=feedback.php'>";
      } else {
          // Error
          echo 'Error: ' . mysqli_error($conn);
      }
  }
}
?>
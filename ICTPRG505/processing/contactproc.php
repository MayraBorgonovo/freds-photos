<?php
    # Start session support.
    session_start();

    # Set variables and sanitize data.
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['emailAddress'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    # Store errors.
    $errors = array();

    # Check if fields are empty.
    if ($name == "" || $email == "" || $message == "") {
        array_push($errors, "All form fields must be completed.");
    }

    # Check if name only contains letters and whitespace.
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        array_push($errors, "Name must only have letters and white space.");
    }

    # Check if email is invalid.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid email address.");
    }

    if ($errors) {
        # Redirect user with error messages.
        $_SESSION['errors'] = $errors;
        header("Location: ../contact.php?err=1");
    } else {
        # Redirect with successful status.
        header("Location: ../contact.php?sts=1");
    }


?>

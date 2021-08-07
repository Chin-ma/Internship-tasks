<?php
    include 'config.php';
    // include 'insert.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $game = $_POST['game'];
    $gender = $_POST['action'];
    // $langs = $_POST['lang'];
    
    $sql = "INSERT INTO info (username, password, phone, email) VALUES ('$username', '$password', '$phone', '$email')";
    if ($conn->query($sql) === TRUE) {
        // echo 'Details added';
    }
    else {
        echo 'Error: '. $sql . '<br>' . $conn->error;
    }

    $conn->close();

    echo '<link rel="stylesheet" href="style.css">';

    echo '<span class="heading">Hello '. $username . '</span><br>';
    echo '<span class="details">According to the details: </span><br>';
    echo '<span class="selections" id="s1">Phone number: '. $phone . '</span><br>';
    echo '<span class="selections" id="s2">Email ID: '. $email . '</span><br>';
    echo '<span class="selections" id="s3">Favorite Game: '. $game . '</span><br>';
    echo '<span class="selections" id="s4">Your Gender: '. $gender . '</span><br>';
    echo '<span class="check">Known Programming Languages: </span><br>';
    foreach ($_POST['lang'] as $selected) {
        echo '<span class="check1">'. $selected .'</span>';
    }

?>

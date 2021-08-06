<?php
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $game = $_POST['game'];
    $gender = $_POST['action'];
    // $langs = $_POST['lang'];

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

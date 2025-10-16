<?php
    
    include("conn.php");
    // Collect and sanitize POST data
    $card_number = $_POST['card-number'];
    $card_holder = $_POST['holder'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv = $_POST['cvv'];

    $insert = "INSERT INTO `card` (`card_number`,`card_holder_name`, `month`, `year`,`cvv`)
                VALUES ('$card_number', '$card_holder', '$month', '$year', '$cvv')";
    $insert_query=mysqli_query($conn,$insert);

    if($insert_query)
    {
            echo 'Card added successfully!';
    }
    else
    {
            echo $insert;
    }

    
?>
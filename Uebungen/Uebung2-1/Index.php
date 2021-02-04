<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    mysqli_select_db($conn, "northwind");

    $sql = 'SELECT * FROM customers WHERE job_title = "Purchasing Representative"';
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      echo $result->num_rows . " Resultate";
    } else {
      echo "Keine Resultate vorhanden";
    }

    mysqli_close($conn);

    var_dump($result);

    ?>
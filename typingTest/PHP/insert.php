<?php

    include "conn.php";

    if (isset($_POST["submit"])) {
        $name = $_POST["userName"];
        $fatherName = $_POST["fatherName"];
        $phoneNo = $_POST["phoneNo"];

        // Prepare an SQL statement to insert data
        $sql = "INSERT INTO userdata (name, fatherName, phoneNo) VALUES (:name, :fatherName, :phoneNo)";
        $stmt = $conn->prepare($sql);

        // Bind values to the prepared statement parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':fatherName', $fatherName);
        $stmt->bindParam(':phoneNo', $phoneNo);

        // Execute the prepared statement to insert the data
        if ($stmt->execute()) {
            echo "Inserted successfuly";
            ?>
            <script>
                window.location.href = "../thanks.html";
            </script>
            <?php
        }else{
            echo "some error";
        }

    }


    




?>
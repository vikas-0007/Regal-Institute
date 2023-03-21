<?php include "PHP/conn.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Test Participants Data</title>
    <link rel="stylesheet" href="Css/participantsData.css">
</head>
<body>

    <div id="container">
        <h2>Participants Data</h2>

        <div id="table">

            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
    
                <tbody>
                
                <?php 

                    $stmt = $conn->query('SELECT * FROM userdata');
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // Print out the data as a table

                    for ($i = 0; $i < count($data); $i++) {
                        echo '<tr>';
                        echo '<td>' . ($i+1) . '</td>';
                        echo '<td>' . $data[$i]['name'] . '</td>';
                        echo '<td>' . $data[$i]['fatherName'] . '</td>';
                        echo '<td>' . $data[$i]['phoneNo'] . '</td>';
                        echo '</tr>';
                    }



                ?>
    
                </tbody>
            </table>
        </div>

    </div>
    
</body>
</html>
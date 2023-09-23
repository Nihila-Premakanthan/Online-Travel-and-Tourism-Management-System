<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/homestyles.css">
    <link rel = "stylesheet" type = "text/css" href = "../css/adminContact.css">
</head>
<body>
    <header class = "header">
              
        <div class = "inner_header">
            <h1 style = "color: #D4550C; ">Paradise Found Here</h1>
        </div>
    </header>
        <div class = "navigation">
            <ul type = "none">
                <li><a href = "#">Accounts Division</a></li>
                <li><a href = "#">Managment</a></li>
                <li><a href = "#">Feedback respond</a></li>
                <li><a href = "#">System admin</a></li>                    
                </ul>
        </div>


    <?php
    include 'connection.php';

$readTable="SELECT * FROM contactus";

                        $readData = $conn->query($readTable);
                        if ($readData->num_rows > 0){
                            echo"
                            <table class='tbl'>
                            <tr>
                                <th>full name</th>
                                <th>contact no</th>
                                <th>email</th>
                                <th>message</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
                            while($row = $readData->fetch_assoc()){
                            $id = $row['id'];    
                                echo "
                                <tr>
                                <td>{$row['full_name']}</td>
                                <td>{$row['contact_no']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['message']}</td>
                                <td><button><a href = 'update.php?updateid=".$id."'>Update</a></button></td>
                                <td><button><a href = 'delete.php?deleteid=".$id."'>Delete</a></button></td>
                                </tr>

                                ";
                            }
                        }
                        ?>
                        
        
</body>
</html>
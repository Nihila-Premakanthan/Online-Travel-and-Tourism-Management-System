<?php
include "connection.php";
include "update.php";

    error_reporting(0);


    
    $readTable="SELECT * FROM contactus WHERE id='$id'";

    
    $readData = $conn->query($readTable);

            if ($readData->num_rows > 0){
                

                while($row = $readData->fetch_assoc()){
                              
                     /initialize data to variable/
                      $stuID=$row['stuID'];
                      $stName=$row['stName'];
                      $enKey=$row['enrolmentKey'];
                                
                 }


          }
                    

    ?>
<?php

$servername='localhost';
    $user='toybank';
    $password='toybank';
    $dbname = "toybank";
$mysqli = new mysqli($servername, $user,
                $password, "$dbname");

if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

// $sql2 = "select * from personal_info";
// $sql1="select * from event_info";
// // $sql3 = "DELETE FROM customer ";
// $result1= $mysqli->query($sql1);
// $result2=$mysqli->query($sql2);
// // $result3=$mysqli->query($sql3);

// //sample insertion
// // $sql4 = "INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`) VALUES (1, 'sdp', 'xxxxxxxx@gmail.com')";
// // $result3=$mysqli->query($sql4);

// $res1=array();
$sql2 = "select * from personal_info";
$sql1="select * from event_info";
$result1= $mysqli->query($sql1);
$result2=$mysqli->query($sql2);
$sql4 = "Delete from customer";
$result4=$mysqli->query($sql4);
$res1=array();
while($rows1=$result1->fetch_assoc()){
    while($rows2=$result2->fetch_assoc()){
        $arr1=str_getcsv($rows1['chk3']);
        $arr2=str_getcsv($rows2['chk5']);
        
        $arr3=array_diff($arr1,$arr2);
        if(sizeof($arr3)== sizeof($arr2)-sizeof($arr1)){
            array_push($res1,$rows2['email']);
            $sql3 = "INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`) VALUES (NULL, '".$rows2['FirstName']."', '".$rows2['email']."')";
            $result3=$mysqli->query($sql3);
        }
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <section>
    <h3>Filtered Volunteers</h3>
    <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Professional Address</th>
                <th>Email</th>
                <th>Languages Known</th>
                <th>Event Name</th>
                <th>Event Date</th>
            </tr>
            
    <?php 
   
          
    for($i=0;$i<sizeof($res1);++$i){
        $sqql = "select a.FirstName, a.LastName, a.ProfAddress, a.email, a.langSpoken,b.EventName, b.eventdate from personal_info a, event_info b where a.chk5 = b.chk3"; 
        $resulty= $mysqli->query($sqql);
       
        while($rows=$resulty->fetch_assoc()){
    ?><tr>
                
                <td><?php echo $rows['FirstName'];?></td>
                <td><?php echo $rows['LastName'];?></td>
                <td><?php echo $rows['ProfAddress'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['langSpoken'];?></td>
                <td><?php echo $rows['EventName'];?></td>
                <td><?php echo $rows['eventdate'];?></td>
        </tr>
        
    <?php
    
        }   
    }
    ?>
    <form method = "POST" action="index.php">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
    </form>
    </table>
    </section>
</body>
</html>
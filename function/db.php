<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

function dbInsert($sql){
    // relate  connection
    global $conn;
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return 'true';
    } else {
        return false;
    }
}


// get row of data from database
// function getRow($table, $feild , $value){
//     global $conn;
//     $sql = " SELECT * FROM `$table` WHERE `$feild` = '$value' ";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//         $row = [];
//         if (mysqli_num_rows($result) > 0) {
//             $row[] = mysqli_fetch_assoc($result);
//             return $row[0];
//         }
//     }
//     return false; 
// }
function getRow(){
        global $conn;
        $sql = " SELECT * FROM admin ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // $row = [];
            // if (mysqli_num_rows($result) > 0) {
            //     $row[] = mysqli_fetch_assoc($result);
            //     return $row[0];
            // }

            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        // return false; 
    }
?>
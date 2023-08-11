<?php  require_once '../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
        <?php include '../style.css' ?>

    </style>
<body>
    <div class="mytable">
    <table class=fl-table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                
            </tr>
        </thead>
        <tbody>
        
<?php 

$sql = "SELECT * FROM admin ";
$result = $conn->query($sql);
if ($result-> num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "
        <tr>
            <td>$row[admin_name]</td>
            <td>$row[admin_email]</td>
        </tr>
       
        ";
    }
}


?>
       
       <tbody>
   </table>
    </div>

</body>
</html>


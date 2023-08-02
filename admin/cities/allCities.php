<?php  require_once '../../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<table>
  <thead>
    <tr>
      <th>ID
      <th>cite name
      <th>action</th>
    <tr>

  </thead>
  

    <tr>
    <?php 

          $sql = "SELECT city_id, city_name FROM cities";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo  "<tr>
                            <td><h4 class='text-black'>$row[city_id]</h4></td>
                            <td><h4 class='text-black'>$row[city_name]</h4></td>
                            <td><a href='editCity.php?city_id=$row[city_id] ' >edit</a></td>
                            <td><a href='delete.php?city_id=$row[city_id] ' >delete</a></td>
                            
                            
                        </tr>
                        ";
            }
          }

?>
      </tr>
</table>
<style>



table {
  
  background: #00d1b2;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em auto;
}
table thead  th {
  font-size: 0.85em;
  font-weight: bold;
  padding: 0.5em 1em;
  text-align: left;
  color: white;
}
td {
  color: #fff;
  font-weight: 400;
  padding: 0.65em 1em;
}

tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #014055;
}

</style>
</body>
</html>




<?php  require_once '../../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    <?php include '../../style.css' ?>
</style>
<body>
  


<div class="mytable">
<table class=fl-table>
        <thead>
            <tr>
                <th>City Name </th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        
    <?php 

          $sql = "SELECT * FROM cities";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo  "
                    <tr>
                        <td><h4 class='text-black'>$row[city_name]</h4></td>
                        <td>
                            <a class='edit' href='editCity.php?city_id=$row[city_id]'><i class='fa-solid fa-2x  fa-pen-to-square'></i></a>  
                            <a class='delete' href='delete.php?city_id=$row[city_id]'><i class='fa-solid fa-2x ms-4 fa-trash'></i></a>
                        </td>
                    </tr>
            ";
            }
          }

?>
       
       <tbody>
   </table>
</div>

<?php require_once aze.'static/footer.php'; ?>

</body>
</html>





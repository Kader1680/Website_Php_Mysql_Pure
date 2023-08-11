<?php  require_once '../../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>
<?php 

          
          if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET['city_id'];
            $sql = "DELETE FROM cities WHERE city_id = '$id' LIMIT 1 ";
            $result = $conn->query($sql);
            echo "<script>window.location.href='allCities.php' </script>";

                // check the query if excute or not
                if (!$result) {
                    die ('not table'.$conn->$error);
              }
          }

?>
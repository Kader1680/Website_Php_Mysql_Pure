<?php  require_once '../../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add cites | silicon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">
</head>
<body>
  
<?php 
    // if (!isset($_GET['city_id']) ) {
    //     echo ',onnn';
    // }
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $id = $_GET['city_id'];
      $sql = "SELECT * FROM `cities`  WHERE `city_id`='$id' LIMIT 1 ";
      $result = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result);

    }
    
    
    
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $citeName = $_POST['citeName'];

        // UPDATE Customers SET ContactName='Juan' WHERE Country='Mexico';
        $sql = "UPDATE cities  SET `city_name` =  '$citeName' LIMIT 1  ";
        $result = $conn->query($sql);

        echo "<script>window.location.href='allCities.php' </script>";


                // check the query if excute or not
                if (!$result) {
                    die ('not table'.$conn->$error);
                    
                    
        }
    }

?>





<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <form action=" " method="POST">
        <div class="formbold-input-flex">
          <div>
              <label for="citeName" class="formbold-form-label"> Add Your Cities </label>
              <input
              type="text"
              name="citeName"
              id="citeName"
              placeholder="cites"
              class="formbold-form-input"
              value="<?php echo $row['city_name']  ?>"
              />
          </div>
         
        <button type="submit" class="formbold-btn">
            Submit
        </button>
    </form>
  </div>
</div>



</body>
</html>

<?php  require_once '../../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>


<?php 
    $signuser = 0;
    $existuser = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $citeName = $_POST['citeName'];
        $sql = "INSERT INTO cities (city_name)". "VALUE ('$citeName') ";
        $result = $conn->query($sql);
        header('location:allCities.php');
                // check the query if excute or not
                if (!$result) {
                    die ('not table'.$conn->$error);
                    
                    
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add cites | silicon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">
</head>
<style>
 <?php include'../../style.css' ?>


</style>
<body>
  




<?php 
    if ($signuser) {
      echo "
      <div class=message-heade has-background-primary	>
        <p>Register was succesfuky</p>
        <button class=delete aria-label=delete></button>
      </div>";
  }
  if ($existuser) {
    echo "
      <div class=message-header has-background-primary	>
        <p>User data is already exit</p>
        <button class=delete aria-label=delete></button>
      </div>";
  }
?>


<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <form action="" method="POST">
        <div class="formbold-input-flex">
          <div>
              <label for="citeName" class="formbold-form-label"> Add Your Cities </label>
              <input
              type="text"
              name="citeName"
              id="citeName"
              placeholder="cites"
              class="formbold-form-input"
              />
          </div>
         
        <button type="submit" class="formbold-btn">
            Submit
        </button>
    </form>
  </div>
</div>



<?php require_once aze.'static/footer.php'; ?>
</body>
</html>

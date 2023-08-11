<?php require_once('../config.php') ?>

<!DOCTYPE html>


<?php  require_once '../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>



<?php 
    $Login_fail = 0;
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // 
        // echo "<div class=bg-danger> asi zebi</div>";
        $adminEmail = $_POST['adminEmail'];
        $adminPass = $_POST['adminPass'];
        // $HashPass = password_hash($adminPass, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM `admin` WHERE admin_email = '$adminEmail' AND admin_password = '$adminPass' ";
        $result = $conn->query($sql);
                // check the query if excute or not
                if ($result) {
                  
                    $arry = mysqli_num_rows($result);

                    if ($arry > 0) {
                        header("Location:/Website_Php_Mysql_Pure");
                        // exit;
                    } else {
                        $Login_fail = 1;
                    }
                    
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silicon | login</title>
</head>
<style>
  <?php require '../style.css' ?>
</style>
<body>

<?php 
    
 
    if ($Login_fail) {
      echo "
      <div class=error>somthinf wrong please try agin</div>
      ";
    }
    
?>

<div class="formbold-main-wrapper">
<div class="formbold-form-wrapper">
  <form action="" method="POST">
      <div class="formbold-input-flex">
        
        <div>
            <label for="adminEmail" class="formbold-form-label"> email  </label>
            
            <input
            type="text"
            name="adminEmail"
            id="lastname"
            placeholder="email"
            class="formbold-form-input"
            />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="adminPass" class="formbold-form-label"> password </label>
            <input
            type="text"
            name="adminPass"
            id="email"
            placeholder="password"
            class="formbold-form-input"
            />
        </div>
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



<?php  require_once '../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>

<?php 
    $signuser = 0;
    $existuser = 0;
    $emty = 0;
    $email = 0;
    $pass = 0;

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $adminName = $_POST['adminName'];
        $adminEmail = $_POST['adminEmail'];
        $adminPass = $_POST['adminPass'];
        
        
        if (empty($adminName) or empty($adminEmail) or empty($adminPass)) {
          
          $emty = 1;
          
        }
        if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
            $email = 1;
        }
        $number    = preg_match('@[0-9]@', $adminPass);
        if(!$number) {
            $pass = 1;
        }
        else{
          $HashPass = password_hash($adminPass, PASSWORD_DEFAULT);
          $sql = "SELECT * FROM `admin` WHERE `admin_name` = '$adminName' ";

          $result = $conn->query($sql);
                  
                  if ($result) {
  
                      $arry = mysqli_num_rows($result);
  
                      if ($arry > 0) {
                          $existuser = 1;
                        
                      } else {
                        $sql = "INSERT INTO admin (admin_name, admin_email, admin_password)". 
                        "VALUES ('$adminName', '$adminEmail', '$adminPass')";
                        $result = $conn->query($sql);
                          if ($result) {
                                   $signuser = 1;
                                   header('Location:/Website_Php_Mysql_Pure');
  
                        }else{
                             die ('not table'.$conn->$error);
  
                        }
                      }
                      
          }
        }

        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign iN | silicon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">
</head>
<style>
  <?php require "../style.css" ?>
</style>
<body>
  




<?php 
  //   if ($signuser) {
  //     echo "
  //     <div class=message-heade has-background-primary	>
  //       <p>Register was succesfuky</p>
  //       <button class=delete aria-label=delete></button>
  //     </div> ";
  // }
  // if ($existuser) {
  //   echo "
  //     <div class=message-header has-background-primary	>
  //       <p>User data is already exit</p>
  //       <button class=delete aria-label=delete></button>
  //     </div>";
  // } #}
  if ($emty) {
    echo "
        <div class=warning>Don't Accept Empty Value Try Again</div>
    
    ";
  }
  if ($email) {
    echo "
        <div class=error> not a valid email address</div>
    
    ";
  }
  if ($pass) {
    echo "
        <div class=info>Password must conatain number character</div>
    
    ";
  }
?>


<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <form action="" method="POST">
        <div class="formbold-input-flex">
          <div>
              <label for="adminName" class="formbold-form-label"> Name </label>
              <input
              type="text"
              name="adminName"
              id="adminPass"
              placeholder="Abdel"
              class="formbold-form-input"
              />
          </div>
          <div>
              <label for="adminEmail" class="formbold-form-label"> Email  </label>
              <input
              type="text"
              name="adminEmail"
              id="lastname"
              placeholder="Abdel@gmail.com"
              class="formbold-form-input"
              />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
              <label for="adminPass" class="formbold-form-label"> Password </label>
              <input
              type="text"
              name="adminPass"
              id="email"
              placeholder="abdel123"
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





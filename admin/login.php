<?php require_once('../config.php') ?>

<!DOCTYPE html>


<?php  require_once '../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>



<?php 
    $Login_fail = 0;
    $Login_sucess = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // 
        // echo "<div class=bg-danger> asi zebi</div>";
        $adminEmail = $_POST['adminEmail'];
        $adminPass = $_POST['adminPass'];
        $sql = "SELECT * FROM `admin` WHERE admin_email = '$adminEmail' AND admin_password = '$adminPass' ";
        $result = $conn->query($sql);
                // check the query if excute or not
                if ($result) {

                    $arry = mysqli_num_rows($result);

                    if ($arry > 0) {
                        $Login_sucess = 1;
                        header("Location:home.php");
                        exit;
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
<body>

<?php 
    
  if ($Login_sucess) {
    echo "
      <div class=message-header has-background-primary	>
        <p>good newi secces login</p>
        <button class=delete aria-label=delete></button>
      </div>";
  }

  if ($Login_fail) {
    echo "
      <div class=message-header has-background-primary	>
        <p>bad newi login fail</p>
        <button class=delete aria-label=delete></button>
      </div>";
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
            placeholder="Abdelkader"
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
            placeholder="Abdel@mail.com"
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
</body>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }
  .formbold-main-wrapper {
    /* display: flex;
    align-items: center;
    justify-content: center; */
    padding: 48px;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }

  .formbold-input-radio-wrapper {
    margin-bottom: 28px;
  }
  .formbold-radio-flex {
    display: flex;
    align-items: center;
    gap: 15px;
  }
  .formbold-radio-label {
    font-size: 14px;
    line-height: 24px;
    color: #07074D;
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .formbold-input-radio {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  .formbold-radio-checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #FFFFFF;
    border: 1px solid #DDE3EC;
    border-radius: 50%;
  }
  .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark {
    background-color: #6A64F1;
  }
  .formbold-radio-checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark:after {
    display: block;
  }

  .formbold-radio-label .formbold-radio-checkmark:after {
    top: 50%;
    left: 50%;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #FFFFFF;
    transform: translate(-50%, -50%);
  }

  .formbold-form-input {
    width: 200%;

    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #DDE3EC;
    background: #FFFFFF;
    font-weight: 500;
    font-size: 16px;
    color: #07074D;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder {
    color: #536387;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6A64F1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }


</style>


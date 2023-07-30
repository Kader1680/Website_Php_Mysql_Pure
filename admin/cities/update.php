<?php  require_once '../../config.php'; ?>
<?php require_once aze.'static/nav.php'; ?>
<?php require_once BL.'function/db.php'; ?>
<h2>Update User Data</h2>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $citeName = $_POST['citeName'];

        // UPDATE Customers SET ContactName='Juan' WHERE Country='Mexico';
        $sql = "UPDATE cities  SET `city_name` =  '$citeName'  ";
        $result = $conn->query($sql);

        header('location:');
                // check the query if excute or not
                if (!$result) {
                    die ('not table'.$conn->$error);
                    
                    
        }
    }

?>
<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <form method="POST" action=" <?php echo BaseURLAdmin.'cities/update.php' ?> " method="POST">
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
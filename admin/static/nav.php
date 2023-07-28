<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
</head>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href=" ">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href=" <?php echo BaseURLAdmin."home.php" ?> ">
        Home
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              cities
            </a>

        <div class="navbar-dropdown">
            <a href=" <?php echo BaseURLAdmin.'cities/addCites.php' ?> " class="navbar-item">
               add
            </a>
            <a  href=" <?php echo BaseURLAdmin.'cities/allCities.php' ?> " class="navbar-item">
                view all
            </a>
        </div>
      </div>


      <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              services
            </a>

        <div class="navbar-dropdown">
            <a class="navbar-item">
              add
            </a>
            <a class="navbar-item">
            view all
            </a>
        </div>
      </div>


      <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              oredes
            </a>

        <div class="navbar-dropdown">
            <a class="navbar-item">
              add 
            </a>
            <a class="navbar-item">
            view all
            </a>
        </div>
      </div>


      <div class="navbar-item has-dropdown is-hoverable">
            <a  class="navbar-link" >
              admins
            </a>

        <div class="navbar-dropdown">
            <a class="navbar-item" href="<?php echo BaseURLAdmin."add.php"; ?>">
              add
            </a>
            <a class="navbar-item">
              view all
            </a>
        </div>
      </div>


    
      </div>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href=" <?php echo BaseURLAdmin."add.php"; ?> " class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a href="<?php echo BaseURLAdmin."login.php"; ?>" class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class= " container" >

</body>
</html>
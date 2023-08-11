<!DOCTYPE html>
<!-- Coding by MultiWebPress /////// https://multiwebpress.com/ -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Navigation Bar | MultiWebPress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap');

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}

header{
  height: 90px;
  background: #fa7E5c;
}

.inner-width{
  max-width: 1000px;
  padding: 0 10px;
  margin: auto;
}

.logo{
  float: left;
  padding: 27px 0;
  color: #fff;
}

.logo img{
  height: 50px;
}

.navigation-menu{
  float: right;
  display: flex;
  align-items: center;
  min-height: 90px;
}

.navigation-menu a{
  margin-left: 10px;
  color: #ddd;
  text-transform: uppercase;
  font-size: 14px;
  padding: 12px 20px;
  border-radius: 4px;
  transition: .3s linear;
}

.navigation-menu a:hover{
  background: #273b91;
  color: #fff;
  transform: scale(1.1);
}

.navigation-menu i{
  margin-right: 8px;
  font-size: 16px;
}

.home{
  color: #fff;
}

a.aj_btn {
  background: #6A64F1;
  color: #fff;
  font-weight: 500;
  letter-spacing: 2px;
}

a.aj_btn:hover{
  background: #fff;
  color: #273b91;
  font-weight: 500;
  letter-spacing: 2px;
}

.menu-toggle-btn{
  float: right;
  height: 90px;
  line-height: 90px !important;
  color: #fff;
  font-size: 26px;
  display: none !important;
  cursor: pointer;
}


@media screen and (max-width:900px) {
  .menu-toggle-btn{
    display: block !important;
  }

  .navigation-menu{
    position: fixed;
    width: 100%;
    max-width: 400px;
    background: #172b4d;
    top: 90px;
    right: 0;
    display: none;
    padding: 20px 40px;
    box-sizing: border-box;
  }

  .navigation-menu::before{
    content: "";
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #172b4d;
    position: absolute;
    top: -10px;
    right: 10px;
  }

  .navigation-menu a{
    display: block;
    margin: 10px 0;
  }

  .navigation-menu.active{
    display: block;
  z-index: 99;

  }
}
    </style>
  </head>
  <body>
    <header>
      <div class="inner-width">
        <h1 class="logo">fd</h1>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="<?php echo BaseURL."index.php" ?>">Home</a>
          <a href="<?php echo BaseURLAdmin."cities/addCites.php" ?>">Add Cities</a>
          <a href="<?php echo BaseURLAdmin."cities/allCities.php" ?>">View All Cities</a>
          <a href="<?php echo BaseURLAdmin."allAdmin.php" ?>">View All admin</a>
          <a href="<?php echo BaseURLAdmin."login.php" ?>" class="aj_btn">Login</a>
          <a href="<?php echo BaseURLAdmin."add.php" ?>" class="aj_btn">Sign In</a>
        </nav>
      </div>
    </header>
    <script src="/Website_Php_Mysql_Pure/scripts/js.js"></script>
  </body>
</html>































































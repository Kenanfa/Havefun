<?php include '../Header.php';
include '../Home/Database.php';
$database = new Database(); ?>
<link href="../../includes/css/login.css" rel="stylesheet">


<body>

<div class="col-xs-12 col-sm-8">
    <h1>Buy Tickets For</h1>
    <h1>Cinema,Theater,Music and Sports.</h1>
    <br><br>
</div>
<div class="login-page">
    <div class="form">

        <form class="login-form">
             <input type="text" placeholder="username" id="username" name="username"/>
             <input type="password" placeholder="password" id="password" name="password"/>
            <button onclick=<?php $username = $_GET["username"];
                     $password = $_GET["password"];
            if(!$database->userExists($username)){
               ?>  <h3> <?php echo "no such user!!!!";?> </h3>                                   <!--add a popup msg-->
              <?php
              }else if(!$database->passwordCorrect($password)){
                ?>  <h3> <?php echo "Wrong password!!!!"; ?> </h3>                                <!--add a popup msg-->
                <?php
              }else{
                  if($database->isAdmin($username)){
                  header('Location: ../User/AdminProfile.php');
              }else {
                      header('Location: ../User/UserProfile.php');
                  }
              }
              ?>
                Sign in</button>
            <p class="message">Not registered? <a href="SignUp.php">Create an account</a></p>
        </form>
    </div>
</div>

<?php include '../Footer.php';?>

</body>
</html>


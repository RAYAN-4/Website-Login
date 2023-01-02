<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
<link rel="stylesheet" href="./css/stayll.css">
</head>

<body>
  <img class="img" src="https://a.top4top.io/p_2547p795g1.png" style="display: inline-block;
  width: 250px;
  height: 250px;
  margin-right: 1500px;
  text-align: center;">
  <div class="main"> 

		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="reg_post.php" method="POST">

					<label for="chk" aria-hidden="true">Sign up</label>

          <?php 
              if(isset($user_error)){
           echo $user_error;

              }
         ?>


					<input type="text" name="user" placeholder="User name" required="">

          <?php 
              if(isset($email_error)){
           echo $email_error;

              }
         ?>
					<input type="email" name="email" placeholder="Email" required="">


          <?php 
              if(isset($pass_error)){
           echo $pass_error;

              }
         ?>

					<input type="password" name="pass" placeholder="Password" required="">
					<button name="button">Sign up</button>
				</form>
			</div>

			<div class="login">
				
					<label for="chk" aria-hidden="true">Login</label>
          <form action="log.php" method="POST">
              <?php 
                    if(isset($email_error)){
                echo $email_error;
                    }
              ?>

					<input type="email" name="email" placeholder="Email" required="">

            <?php if(isset($pass_error)){
              echo $pass_error;
            }
            
            ?>

					<input type="password" name="pass" placeholder="Password" required="">
					<button>Login</button>
        </form>
      </div>
      



  <div class='container'>
    <div class='pink-shadow'></div>
    <div class='pink-planet'>
      <div class='circles'>
        <div class='circle' id='circle-1'></div>
        <div class='circle' id='circle-2'></div>
        <div class='circle' id='circle-3'></div>
        <div class='circle' id='circle-4'></div>
        <div class='circle' id='circle-5'></div>
        <div class='circle' id='circle-6'></div>
        <div class='circle' id='circle-7'></div>
      </div>
    </div>
    <div class='orbit'></div>
    <div class='blue-shadow'></div>
    <div class='blue-planet'></div>
    <div class='star-1'></div>
    <div class='star-2'></div>
  </div>
  <div class='small-stars'>
    <div class='small-star' id='small-star-1'></div>
    <div class='small-star' id='small-star-2'></div>
    <div class='small-star' id='small-star-3'></div>
    <div class='small-star' id='small-star-4'></div>
    <div class='small-star' id='small-star-5'></div>
    <div class='small-star' id='small-star-6'></div>
  </div>
  <div class='white-gradient'></div>

</body>
</html>
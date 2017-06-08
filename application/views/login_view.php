<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobcard System</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#FFFFFF;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form action="" method="post">
              <h1><img src="<?php echo base_url(); ?>images/tiketi.jpg"/></h1>
              <?php 
              if(isset($error)){
                ?>
                <div id="error-message">
                    <?php echo $error; ?>
                </div>
                <?php
              }
              ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="inputEmail" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="inputPassword" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log In"/>
<!--                <a class="reset_pass" href="#">Lost your password?</a>-->
              </div>
              <div class="clearfix"></div>
              <div class="separator">
<!--                <p class="change_link">New to site?
                  <a href="#toregister" class="to_register"> Create Account </a>
                </p>-->
                <div class="clearfix"></div>
                <br />
                <div>
<!--                  <h1><i class="fa fa-wrench" style="font-size: 26px;"></i> Jobcards</h1>-->

                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
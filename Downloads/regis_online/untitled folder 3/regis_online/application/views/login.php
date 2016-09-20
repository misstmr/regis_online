
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'asset/'; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'asset/'; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'asset/'; ?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open('regis_online/login');?>
              <h1>Login Admin</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="Username" required="" />
              </div>
              <div>
                  <input type="password" class="form-control" placeholder="Password" name="Password" required="" />
              </div>
              <div>
                  <button type="submit"  class="btn btn-default submit" value="">Log in</button></a
               
              </div>

              <div class="clearfix"></div>

             
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
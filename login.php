<?php
  $login = true;
  require_once('_inc/header.php');
?>

<div class="container home">

  <div class="col-md-12 text-center">
    <img class="logo" src="images/logo.png" />
  </div>

  <div class="col-md-12 text-center">
    <button type="button" class="btn btn-info btn-lg signin" data-toggle="modal" data-target="#myModal">Sign In</button>
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

      <form class="form-signin" action="#">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

      </div>
      
    </div>
  </div>
  </div>

<div class="col-md-12" style="background:white;">
  <div class="container marketing">
    <div class="col-lg-12 heading">
      <center>
        <p style="font-size: 24px; font-weight: 700;">
          New to San Francisco?
        </p>
        <p style="font-size: 14px; font-weight: 300;">
          Meet locals who can introduce you to the city
        </p>
      </center>
    </div>

    <?php echo $matches->matchList($user_id,3); ?>

    <div class="col-lg-12">
      <div class="col-lg-12 heading">
        <center>
          <p style="font-size: 24px; font-weight: 700;">
            Explore the many neighborhoods in SF
          </p>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 boxleft align-center">
        <img src="images/home1.jpg" height="300px;"/>
        <div style="padding-left: 0px;" class="col-lg-9">
          <p style="font-size: 18px; font-weight: 700; margin-bottom: 0px !important;">
            Tomo <img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;">
          </p>
          <p style="font-size: 13px; font-weight: 300;">
            Let me introduce you to the Japantown community
          </p>
        </div>
        <div class="col-lg-3">
          <img class="img-circle" src="images/profile9.jpg" alt="Generic placeholder image" width="70" height="70">
        </div>
      </div>

      <div class="col-lg-6 boxright align-center">
        <img src="images/home2.jpg" height="300px;"/>
        <div style="padding-left: 0px;" class="col-lg-9">
          <p style="font-size: 18px; font-weight: 700; margin-bottom: 0px !important;">
            Jeff <img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;">
          </p>
          <p style="font-size: 13px; font-weight: 300;">
            I will show you the Mission district
          </p>
        </div>
        <div class="col-lg-3">
          <img class="img-circle" src="images/profile1.jpg" alt="Generic placeholder image" width="70" height="70">
        </div>
      </div>
    </div>

    <br />
    <br />

    <div class="col-lg-12">
      <div class="col-lg-12 heading">
        <center>
          <p style="font-size: 24px; font-weight: 700;">
            Explore the arts &amp; culture of SF
          </p>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 boxleft align-center">
        <img src="images/home3.jpg" height="300px;"/>
        <div style="padding-left: 0px;" class="col-lg-9">
          <p style="font-size: 18px; font-weight: 700; margin-bottom: 0px !important;">
            Tomo <img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;">
          </p>
          <p style="font-size: 13px; font-weight: 300;">
            I love to go to museums
          </p>
        </div>
        <div class="col-lg-3">
          <img class="img-circle" src="images/profile5.jpg" alt="Generic placeholder image" width="70" height="70">
        </div>
      </div>

      <div class="col-lg-6 boxright align-center">
        <img src="images/home4.jpg" height="300px;"/>
        <div style="padding-left: 0px;" class="col-lg-9">
          <p style="font-size: 18px; font-weight: 700; margin-bottom: 0px !important;">
            Lauren <img src="images/star.png" height="18px;"><img src="images/star.png" height="18px;">
          </p>
          <p style="font-size: 13px; font-weight: 300;">
            Jazz music is my favorite
          </p>
        </div>
        <div class="col-lg-3">
          <img class="img-circle" src="images/profile4.jpg" alt="Generic placeholder image" width="70" height="70">
        </div>
      </div>
      </div>
  <script src="js/login-ajax.js" type="text/javascript"></script>
  <script>
    jQuery(document).ready(function(){
        LOGIN_FORM.load._init("<?php echo $homepath; ?>");
    });
  </script>

<?php require_once('_inc/footer.php'); ?>

<?php
  require_once('_inc/header.php');

  if(isset($_GET['id'])){
    require_once('classes/user.class.php');
    $user_id = $_GET['id'];
    $user = new LetZC_User($user_id,$mysqli,$homepath);
  }
  else{
    //location('Header/');
  }
?>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo $user->image_path; ?>" width="140" height="140">
          <h2><?php echo $user->first_name." ".$user->last_name; ?></h2>
          <p><?php echo $user->description; ?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
        <iframe src="https://calendar.google.com/calendar/embed?src=h3r4fct34veifnr8pevnnn2bmg%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
        
          
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <h1>Neighborhoods</h1>

      <form action="action_page.php">
          <select name="cars">
            <option value="">Castro District</option>
            <option value="">Saab</option>
            <option value="">Fiat</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            <option value="">Audi</option>
            
          </select>
          <br><br>
          <input type="submit">
      </form>
      <!-- /END THE FEATURETTES -->
<?php require_once('_inc/footer.php'); ?>

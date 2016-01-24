<?php
  require_once('_inc/header.php');
  require_once('_inc/dashboard-header.php');
  require_once('classes/user.class.php');
  $user_id = isset($_GET["id"]) ? $_GET["id"] : $_SESSION['id'];
  $user = new LetZC_User($user_id,$mysqli,$homepath);
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
        </div><!-- /.col-lg-4 -->
        <!--<div class="col-lg-8">
        <iframe src="https://calendar.google.com/calendar/embed?src=h3r4fct34veifnr8pevnnn2bmg%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
        
          
        </div>--><!-- /.col-lg-4 -->
        <div class="col-lg-7 pull-right">

          <div id="calendar-wrap">
            <div id="calendar">
              <ul class="weekdays">
                <li>Sunday</li>
                <li>Monday</li>
                <li>Tuesday</li>
                <li>Wednesday</li>
                <li>Thursday</li>
                <li>Friday</li>
                <li>Saturday</li>
              </ul>

              <!-- Days from previous month -->

              <ul class="days">
                <li class="day other-month">
                  <div class="date">27</div>
                </li>
                <li class="day other-month">
                  <div class="date">28</div>
                  <div class="event">
                  </div>
                </li>
                <li class="day other-month">
                  <div class="date">29</div>
                </li>
                <li class="day other-month">
                  <div class="date">30</div>
                </li>
                <li class="day other-month">
                  <div class="date">31</div>
                </li>

                <!-- Days in current month -->

                <li class="day">
                  <div class="date">1</div>
                </li>
                <li class="day">
                  <div class="date">2</div>
                  <div class="event">
                  </div>
                </li>
              </ul>

              <!-- Row #2 -->

              <ul class="days">
                <li class="day">
                  <div class="date">3</div>
                </li>
                <li class="day">
                  <div class="date">4</div>
                </li>
                <li class="day">
                  <div class="date">5</div>
                </li>
                <li class="day">
                  <div class="date">6</div>
                </li>
                <li class="day">
                  <div class="date">7</div>
                  <div class="event">
                  </div>
                </li>
                <li class="day">
                  <div class="date">8</div>
                </li>
                <li class="day">
                  <div class="date">9</div>
                </li>
              </ul>

              <!-- Row #3 -->

              <ul class="days">
                <li class="day">
                  <div class="date">10</div>
                </li>
                <li class="day">
                  <div class="date">11</div>
                </li>
                <li class="day">
                  <div class="date">12</div>
                </li>
                <li class="day">
                  <div class="date">13</div>
                </li>
                <li class="day">
                  <div class="date">14</div><div class="event">
                  </div>
                </li>
                <li class="day">
                  <div class="date">15</div>
                </li>
                <li class="day">
                  <div class="date">16</div>
                </li>
              </ul>

              <!-- Row #4 -->

              <ul class="days">
                <li class="day">
                  <div class="date">17</div>
                </li>
                <li class="day">
                  <div class="date">18</div>
                </li>
                <li class="day">
                  <div class="date">19</div>
                </li>
                <li class="day">
                  <div class="date">20</div>
                </li>
                <li class="day">
                  <div class="date">21</div>
                </li>
                <li class="day">
                  <div class="date">22</div>
                  <div class="event">
                  </div>
                </li>
                <li class="day">
                  <div class="date">23</div>
                </li>
              </ul>

              <!-- Row #5 -->

              <ul class="days">
                <li class="day">
                  <div class="date">24</div>
                </li>
                <li class="day">
                  <div class="date">25</div>
                  <div class="event">
                  </div>
                </li>
                <li class="day">
                  <div class="date">26</div>
                </li>
                <li class="day">
                  <div class="date">27</div>
                </li>
                <li class="day">
                  <div class="date">28</div>
                </li>
                <li class="day">
                  <div class="date">29</div>
                </li>
                <li class="day">
                  <div class="date">30</div>
                </li>
              </ul>

              <!-- Row #6 -->

              <ul class="days">
                <li class="day">
                  <div class="date">31</div>
                </li>
                <li class="day other-month">
                  <div class="date">1</div> <!-- Next Month -->
                </li>
                <li class="day other-month">
                  <div class="date">2</div>
                </li>
                <li class="day other-month">
                  <div class="date">3</div>
                </li>
                <li class="day other-month">
                  <div class="date">4</div>
                </li>
                <li class="day other-month">
                  <div class="date">5</div>
                </li>
                <li class="day other-month">
                  <div class="date">6</div>
                </li>
              </ul>

            </div><!-- /. calendar -->
          </div><!-- /. wrap -->



        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="col-md-12">
        <div class="col-md-6">

          <div class="col-md-12 activity_header">
            <h1>Physical Activties</h1>

            <form action="demo_form.asp" method="get">
              <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
              <input type="checkbox" name="vehicle" value="Car" checked> I have a car<br>
            </form>


          </div>

          <div class="col-md-12 activity_header">
            <h1>Arts and culture</h1>

            <form action="demo_form.asp" method="get">
              <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
              <input type="checkbox" name="vehicle" value="Car" checked> I have a car<br>
            </form>


          </div>

          <div class="col-md-12 activity_header">
            <h1>Nightlife</h1>

            <form action="demo_form.asp" method="get">
              <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
              <input type="checkbox" name="vehicle" value="Car" checked> I have a car<br>
            </form>

          </div>
        </div>

        <div class="col-md-6 activity_header">
          <h1>Favorite Locations</h1>
          <img src="images/google_maps.png">
        </div>

      </div>
<?php require_once('_inc/footer.php'); ?>

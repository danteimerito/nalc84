            
<?php get_header(); ?>

<?php 
    // retireve event datetime string and convert to datestamp
    $dt = get_field('event_datetime');
    $toTime = strtotime($dt);
    $type = gettype($toTime);
?>

<div class="container nav-spacer">
<h1> <?php the_title() ?> </h1>

    <div class="row event-single">
      
        <div class="calendar">
          <div class="year-wkdy">
            <div class="wkdy">
              <?php 
                $d = date('D', $toTime);
                echo $d;
              ?>
            </div>
            <div class="year">
              <?php 
                $d = date('Y', $toTime);
                echo $d;
              ?>
            </div>
          </div>
          <div class="stripes-cal">.</div>
          <div class="date">
            <?php 
              $d = date('d', $toTime);
              echo $d;
            ?>
          </div>
          <div class="month">
            <?php 
              $d = date('M', $toTime);
              echo $d;
            ?>
          </div>
        </div>
       
      
      <div class="">
        <div class="details">
          <div class="time">
            <h4>Date:</h4>
            <p>
              <?php 
                $d = date('F j, Y', $toTime);
                echo $d;       
              ?>
            </p>
          </div>
        <div class="time">
          <h4>Time:</h4>
          <p>
            <?php 
              $d = date('h:i A', $toTime);
              echo $d;       
            ?>
          </p>
        </div>
        <div class="time">
          <h4>Duration:</h4>
          <p>
            <?php 
              the_field('duration');       
            ?>
          </p>
        </div>
        <div class="location">
          <h4>Location:</h4> 
          <p>
            <?php 
              // $d = date('h:i A', $toTime);
              echo the_field('location');       
            ?>
          </p>
        </div>
      </div>


    <div class="">

        <?php the_content() ?>


        <div class="all-events-button">
          <a href="<?php echo get_site_url() ?>/events/">
            <button class="waves-effect waves-light btn">All Events</button>
          </a>
        </div>

      </div>

      
      
    </div>
    
  </div>

</div>
      









    


<?php 
  // echo get_template_directory_uri().the_title();
?>

<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>
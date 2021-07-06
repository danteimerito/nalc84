            
<?php get_header(); ?>

<?php 
    // retireve event datetime string and convert to datestamp
    $dt = get_field('event_datetime');
    $toTime = strtotime($dt);
    $type = gettype($toTime);
?>


<div class="container nav-spacer">
    <div class="row">
        <h1> <?php the_title(); ?> </h1>
        <?php the_content(); ?>

   
          <div className="col l7 m11">
            <div className="calendar">
              <div className="year-wkdy">
                <div className="wkdy">
                    <?php 
                        $d = date('D', $toTime);
                        echo $d;
                    ?>
                </div>
                <div className="year">Year Y</div>

              </div>
              <div className="stripes-cal">.</div>
              <div className="date">
                Date D
              </div>
              <div className="month">
                Month
              </div>
            </div>
            <h1>Title</h1>
          </div>
          
          <div className="col l7 m11 s12">
            <div className="details">
              <div className="time"><h4>Date:</h4><p>date LL</p></div>
              <div className="time"><h4>Time:</h4><p>Time LT</p></div>
              <div className="location"><h4>Location:</h4> <p>Location</p></div>
            </div>
          </div>
          <div className="col l7 m12 s12 all-events-btn">
            <a href="/nalc84/events">
              <button className="waves-effect waves-light btn">All Events</button>
            </a>
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
  <?php get_header(); ?> 

  <div class="top-panel"><div>LETS BUILD SOMETHING TOGETHER.</div></div>
  <div class="about large-8 columns large-centered" id="about">
    <div class="large-6 columns">
      <div class="about-pic"></div>
    </div>
    <div class="about-text large-6 columns">
      <h2>about <span>me</span>.</h2>
      
      <?php if ( is_active_sidebar( 'about-txt' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'about-txt' ); ?>
        </div>
      <?php endif; ?>

    
    </div>
  </div>

  <div class="work large-10 columns large-centered" id="work" >
    <h2 class="large-12 columns" >recent work.</h2>
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => '4',
    );

    $featured = new WP_Query($args);

    ?>
    <?php if ( $featured->have_posts() ) : while ( $featured->have_posts() ) : $featured->the_post(); ?>
      <div class="large-6 columns">
        <?php the_post_thumbnail(); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php endwhile; else: ?>

  <?php endif; ?>
  </div>


  <div class="contact large-6 columns large-centered" >
      <div class="row" >
      <div class="large-10 push-2 columns"id="contact"><h2>get in touch.</h2></div>
    </div>
      <form action="send.php" method="post">
        <div class="row">
          <div class="large-2 small-2 columns">
            <label for="right-label" class="right inline">name:</label>
          </div>
          <div class="large-10 small-10 columns">
            <input type="text" id="right-label" name="name" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="large-2 small-2 columns">
            <label for="right-label" class="right inline">email:</label>
          </div>
          <div class="large-10 small-10 columns">
            <input type="text"  name="email" id="right-label" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="large-2 small-2 columns">
            <label for="right-label" class="right inline">message:</label>
          </div>
          <div class="large-10 small-10 columns">
            <textarea name="message" id= "right-label" placeholder=""></textarea><br>
          </div>
        </div>
        <div class="row">
          <div class="large-2 small-2 columns push-2">
            <input type="submit" id="searchForm " value="send"class="button" onclick="SubmitForm();">
          </div>
        </div>
        </form>
  </div>
</div>

<?php get_footer(); ?>
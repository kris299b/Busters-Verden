<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        
    endwhile;
endif;
?>


<?php // We use the first inner loop to iterate all movies in the database
    $actors = new WP_Query(
        array(
            "post_type" => "actor", // Insert the name of your CPT here.
            "posts_per_page" => -1
        )
    );
?>


<?php if ( get_field('welcome_text' ) ): ?> <!-- Welcome headline -->
      <h3 class="text-center mt-5"><?php echo esc_html( get_field('welcome_text') ); ?></h3>
<?php endif; ?>

<?php if ( get_field('welcome_text_area' ) ): ?> <!-- Welcome - text area -->
    <p class="m-4 text-center"><?php echo esc_html( get_field('welcome_text_area') ); ?><p>
<?php endif; ?>

<div class="container">
    <p class="text-center mb-5">Director: Thomas Boulund Asger</p> <!-- Director - name -->
</div>


<h3 class="text-center mt-5 mb-5">Medvirkende</h3> <!-- Medvirkende - headline -->


<div class="container"> <!-- Actor - section -->
<div class="row mt-n1-9">
<?php if($actors->have_posts()): ?>
    <?php while($actors->have_posts()): $actors->the_post() ?>


            <div class="col-md-6 col-xl-3 mt-1-9 mb-3 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="team-style07">
                    <div class="team-thumb mb-1-7">
                        <div class="thumb"><img src="<?php the_field("actor_image") ?>" class="rounded-circle" alt="..."></div>
                    </div>
                    <h5><?php the_field("actor_name")?></h5>
                    <p><?php the_field("character_name")?>
                </div>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata() ?>
        
        </div>
        </div>
<?php endif; ?>



<h2 class="text-center mt-5 mb-5">Tak til</h2> <!-- Welcome - headline -->


<?php // We use the first inner loop to iterate all movies in the database
    $sponsers = new WP_Query(
        array(
            "post_type" => "sponser", // Insert the name of your CPT here.
            "posts_per_page" => -1
        )
    );
?>

<!-- Sponsors page -->
<div class="container">
  <div class="row text-center text-lg-start">
  <?php if($sponsers->have_posts()): ?>
            <?php while($sponsers->have_posts()): $sponsers->the_post() ?>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
        <div class="thumb"><img src="<?php the_field("sponser_image") ?>" alt="..."></div>
      </a>
    </div>
    <?php endwhile; ?>
            <?php wp_reset_postdata() ?>
  </div>
</div>
<?php endif; ?>


<div class="container mt-5"> <!-- ACF review - section -->
  <div class="row align-items-start">
    <div class="col">
    <?php if ( get_field('review_headline' ) ): ?> <!-- review - headline -->
      <p class=""><?php echo esc_html( get_field('review_headline') ); ?></p>
    <?php endif; ?>

    <?php if ( get_field('review_sub_headline' ) ): ?> <!-- review - paragraf -->
      <h5 class="mb-3"><?php echo esc_html( get_field('review_sub_headline') ); ?></h5>
    <?php endif; ?>

    <?php if ( get_field('review_text_area' ) ): ?> <!-- review - paragraf -->
      <p class=""><?php echo esc_html( get_field('review_text_area') ); ?></p>
    <?php endif; ?>
  </div>
    <div class="container text-center col">
        <div class="competition-image"></div>
    </div>
  </div>
</div>




<?php get_footer() ?> 
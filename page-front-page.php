<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        
    endwhile;
endif;
?>

<div class="hero"> <!-- ACF Hero-image section -->
    <?php $image = get_field('hero_image_buster'); ?>
    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
    <div class="hero-text">
      <?php if ( get_field('hero_image_title' ) ): ?> <!-- competition - paragraf -->
        <h1 class="display-3"><?php echo esc_html( get_field('hero_image_title') ); ?></h1>
      <?php endif; ?>
      <?php if ( get_field('hero_image_paragraf' ) ): ?> <!-- competition - paragraf -->
        <h3 class="mt-3 display-6"><?php echo esc_html( get_field('hero_image_paragraf') ); ?></h3>
      <?php endif; ?>
      <button type="button" class="btn btn-outline-light mt-4">Køb billet</button>
    </div>
</div>


<!-- hero section - billede er statisk men tekst dynamisk
<div class="hero-image">  
  <div class="hero-text">
    <?php if ( get_field('hero_image_title' ) ): ?> 
      <h1 class=""><?php echo esc_html( get_field('hero_image_title') ); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_image_paragraf' ) ): ?> 
      <h3 class="mt-2"><?php echo esc_html( get_field('hero_image_paragraf') ); ?></h3>
    <?php endif; ?>
    <button type="button" class="btn btn-outline-light mt-4">Køb billet</button>
  </div>
</div> 

-->


<?php if ( get_field('busters_verden' ) ): ?> <!-- ACF Busters Verden - Title -->
    <h3 class="text-center mt-5"><?php echo esc_html( get_field('busters_verden') ); ?></h3>
<?php endif; ?>


<?php if ( get_field('summary_area' ) ): ?> <!-- ACF Busters Verden - summary -->
    <p class="text-center p-4"><?php echo esc_html( get_field('summary_area') ); ?></p>
<?php endif; ?>


<div class="image"> <!-- Ticket-section where you can buy tickets -->
  <div class="inner-item1">
    <button type="button" class="btn btn-outline-light">Køb billet</button>
  </div>
</div> 


<div class="container mt-5"> <!-- ACF Competition-section where you can win tickets -->
  <div class="row align-items-start">
    <div class="col">
    <?php if ( get_field('competition_headline' ) ): ?> <!-- competition - headline -->
      <p class=""><?php echo esc_html( get_field('competition_headline') ); ?></p>
    <?php endif; ?>

    <?php if ( get_field('tickets_to_win' ) ): ?> <!-- competition - paragraf -->
      <h5 class=""><?php echo esc_html( get_field('tickets_to_win') ); ?></h5>
    <?php endif; ?>

    <?php if ( get_field('competition_text_area' ) ): ?> <!-- competition - paragraf -->
      <p class=""><?php echo esc_html( get_field('competition_text_area') ); ?></p>
    <?php endif; ?>
  </div>
    <div class="container text-center col">
        <div class="competition-image"></div>
    </div>
  </div>
</div>



<?php get_footer() ?> 
<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        the_title (); 
        the_field ();
        echo do_shortcode ();
    endwhile;
endif;
?>

<h1>
    Hello World
</h1>

<?php get_footer() ?> 
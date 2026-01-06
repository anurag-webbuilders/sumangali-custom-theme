<?php get_header(); ?>

<div class="container">
    <h1 class="premium-title">Our Exclusive Saari Collection</h1>
    
    <?php 
    // This shortcode automatically pulls the newest products the admin added
    echo do_shortcode('[products limit="8" columns="4" orderby="date"]'); 
    ?>
</div>

<?php get_footer(); ?>

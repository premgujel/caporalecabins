<?php
get_header();
?>
<div class="container">
<div class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;
?>

</div>
</div>
<?php
get_footer();
?>
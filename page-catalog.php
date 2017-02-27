<p>Is file - page-catalog.php</p>
<?php

get_header();




$posts = new WP_Query('cat=13');


if ($posts -> have_posts()) :
    while ($posts -> have_posts()) : $posts -> the_post();
        ?>

        <article class="post">
            <h2>Added title : <?php the_title(); ?></h2>
            <p> Added content : <?php the_content(); ?></p>

        </article>

        <?php
    endwhile;

else :
    echo '<p> No content </p>';

endif;


get_footer();

?>
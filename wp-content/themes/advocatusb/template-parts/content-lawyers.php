<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 09.02.2018
 * Time: 10:42
 */
?>


<div class="team_list">
    <?php the_post_thumbnail(); ?>
    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
    <span class="position_held"><?php the_field('position'); ?></span>
</div>








<?php
/*
    Template: Project
*/
?>
<?php get_header(); ?>
<?php if (is_singular('portfolio')) {; ?>
    <div class="container">
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <h1 class="site__heading"> <?php the_title(); ?></h1>

                <?php the_content(); ?>
                <?php if (has_category('video-games')) : ?>

                    <div class="review">
                        <div class="review__score">Note : <?php the_field('note'); ?> / 10</div>

                        <div class="review__cols">
                            <div class="review__pros">Les plus : <?php the_field('les_plus'); ?></div>
                            <div class="review__cons">Les moins : <?php the_field('les_moins'); ?></div>
                        </div>

                        <div class="review__date">Sortie le <?php the_field('date_de_sortie'); ?></div>

                        <?php
                        if (get_field('pochette')) :
                            $picture = get_field('pochette');
                        ?>
                            <div class="review__picture">
                                <img src="<?php echo $picture['sizes']['post-thumbnail']; ?>" alt="Pochette de <?php $picture['title']; ?>">
                            </div>

            <?php
                        endif;
                    endif;

                endwhile;
            endif;
            ?>

                    </div>
                    <?php get_footer(); ?>
                <?php }; ?>
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
            var_dump($picture);
        ?>
            <div class="review__picture">
                <img src="<?php echo $picture['sizes']['post-thumbnail']; ?>" class="vg-article-image" alt="Pochette de <?php $picture['title']; ?>">
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>
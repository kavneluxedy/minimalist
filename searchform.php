<form action="<?php echo home_url( '/' ); ?>" method="POST" class="search-form">
    <input class="search-input" type="text" value="<?php the_search_query(); ?>" name="search" placeholder="Rechercher dans le site"/>
    <input class="search-icon" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/search-icon-64-black.png" />
</form>
<a href="<?php the_permalink(); ?>" class="actua-item">
    <div class="line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/line-blocks.svg" alt="Line" />
    </div>
    <div class="date">
        <?php if(get_field('date')): ?>
            <h3><?php the_field('date'); ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="1" viewBox="0 0 10 1">
                <line id="Ligne_40" data-name="Ligne 40" x2="10" transform="translate(0 0.5)" fill="none" stroke="#1f2e4a" stroke-width="1"/>
            </svg>
        <?php endif; ?>
        <h3>
            <?php 
                //foreach(get_the_category($post->ID) as $category){ echo $category->name . ' '; }

                $categories = get_the_category($post->ID);
                $categories_string = implode(' - ', array_column($categories, 'name'));
                $categories_string = rtrim($categories_string, ' - ');
                
                echo $categories_string;
            ?>
        </h3>
    </div>
    <div class="title">
        <?php the_title(); ?>
    </div>
    <div class="tag"><?php the_field('tag'); ?></div>
    <div class="read-more">
        <img src="<?php echo get_template_directory_uri(); ?>/images/actua-plus-blue.svg" alt="Actua Plus Blue" />
        <?php echo __("I’m interested", "hakiki-tra"); ?>
    </div>
</a>

<article class="post">

    <?php 
    //Loop Start
    while( have_posts() ): the_post(); ?>
        <div class="post-loop">
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="post-content">
                <div class="post-content-title">
                <a href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                </a>
                </div>
                <div class="post-content-meta">
                    <p><?php the_time('d M,y');?></p>
                    <p><?php the_category(' '); ?></p>
                    
                </div>
            </div>
        
        </div>

    <?php endwhile; ?>

</article>


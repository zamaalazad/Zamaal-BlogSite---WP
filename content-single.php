
<article class="single">

<?php 
//Loop Start
while( have_posts() ): the_post(); ?>
    <div class="single-post-loop">
        <div class="post-thumbnail">
            <?php the_post_thumbnail(array(256,256)); ?>
            <p>
                <span class="month">
                <?php the_time('F');?>
                </span>
                <span class="date"><?php the_time('d');?>
                </span>
                <span class="year">
                <?php the_time('Y');?>
                </span>
            </p>
        </div>

        <div class="post-content">
            <div class="post-content-title">
                    <h1><?php the_title(); ?></h1>
            </div>
            <div class="post-content-meta">
                
                <p><?php the_category(' '); ?></p>
                
            </div>
        </div>
    
    </div>

    <div class="single-post-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>

</article>
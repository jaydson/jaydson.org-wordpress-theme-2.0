<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
    	<div class="post-content">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class='post-categories'>
      		<?php the_category(','); ?>
      </div>
      <div class="post-date"> <?php the_time('d, F Y'); ?></div>
      <?php the_content(); ?>
      <a href="<?php comments_link(); ?>"><?php echo comments_number(); ?></a>
      <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
		</div>
<?php endwhile; // End the loop ?>

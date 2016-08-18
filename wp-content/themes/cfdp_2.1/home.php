<?php get_header(); ?>

<div class="content clearfix">
  <div class="slider grid_12 clearfix">
    <?php dynamic_content_gallery(); ?>
  </div><!-- .slider -->
  <div class="grid_12 clearfix">
    <h1>Blogindlæg</h1>
    <div class="posts">

  <?php
        $query = array(
          'category__in' => array(9),
          'posts_per_page'  => 6,
        );
        query_posts($query);
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="post">
            <?php if(has_post_thumbnail()) { ?>
            <a class="image" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('large'); ?>
              <h3><?php the_title(); ?></h3>
            </a>
            <?php } ?>

            <span class="postInfo">
              af <a href="#" class="author"><?php the_author_posts_link(); ?></a> for
              <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' siden'; ?>
              <?php $comment_count = get_comment_count($post->ID); ?><?php if ($comment_count['approved'] > 0) : ?> | <?php endif; ?>
              <?php comments_popup_link('', '1 Kommentar', '% Kommentarer'); ?>
            </span>
              <p class="text-intro">
                <?php truncate( get_the_excerpt(), 350); ?> <a href="<?php the_permalink() ?>" class="more">Læs&nbsp;indlæg</a>
              </p>
          </div>

        <?php endwhile; else:
        echo('Desværre, ingen indlæg fundet');
        endif;
        wp_reset_query();
        ?>

        <a href="erfarninger/vidensarkiv/" class="readMore">Læs&nbsp;flere&nbsp;indlæg</a>

      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
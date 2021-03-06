<?php
  include (TEMPLATEPATH . '/inc/post_authorlink.php' );
  $meta_teaser = get_post_meta( get_the_ID(), 'teaser', true );
  if ( !empty( $meta_teaser ) ){
    $post_teaser = $meta_teaser;
  } else {
    $post_teaser = get_the_excerpt();
  }
?>

<div class="post">
  <?php if(has_post_thumbnail()) { ?>
  <a class="image" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('large'); ?>
  </a>
  <?php } ?>
  <a href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
  </a>

  <span class="postInfo">
    Indlæg af <?php echo $custom_author_link ?> for
    <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' siden'; ?>
  </span>
    <p class="text">

      <?php truncate( $post_teaser, 350); ?>
      <a href="<?php the_permalink() ?>" class="more">Læs&nbsp;indlæg</a>
    </p>
</div>
<?php
/*
Template Name: Page no sidebar
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="content grid_12 clearfix">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php
				if(has_post_thumbnail()) {
				the_post_thumbnail();
				echo '<h1 class="thumbHeading grid_12 clearfix">' . get_the_title() . '</h1>';
				}
				else {
					echo '<h1 class="heading alpha grid_12 clearfix">' . get_the_title() . '</h1>';
				}
			?>

			<div class="grid_12 alpha zi1">

				<div class="entry">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>



				<?php comments_template(); ?>
			</div>

		</div>


<?php endwhile; endif; ?>

	</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	    lastBlock = $("#nav1 div.tabOpen");
	});
</script>
<?php get_footer(); ?>
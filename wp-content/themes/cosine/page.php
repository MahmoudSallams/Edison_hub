<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */

/**
 * Prevent direct access to this file
 */
defined( 'ABSPATH' ) or die();
?>

<?php if ( have_posts() ): ?>
	<div class="content-inner">
		<?php while ( have_posts() ): the_post(); ?>
			<?php the_content() ?>
		<?php endwhile ?>
	</div>
	<!-- /.content-inner -->

	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) comments_template();
	?>
<?php endif ?>
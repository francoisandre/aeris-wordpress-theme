<?php
/**
 * Template part for displaying a title & breadcrumbs on page
 *
 * @package aeris
 */

?>
<div id="breadcrumbs">
	<div class="wrapper">
		<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
		<h1 rel="bookmark">
			<?php the_title(); ?>
		</h1>
	</div>
</div>



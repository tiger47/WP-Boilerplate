<?php
	/**
	 * Front Page Template
	 *
	 * This is the default template for all pages.
	 *
	 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
	 * @author Fastspot
	 * @package WordPress
	 * @subpackage Boilerplate
	 * @since 1.0.0
	 * @version 1.0.0
	 */

	// Everything is stored in our namespace.
	namespace Boilerplate;

	get_header();

	while (have_posts()) {
		the_post();
		$post_id = get_the_ID();
		$full_width_callouts = get_field('full_width');
?>
<!-- Page -->
<div class="page">
	<!-- Page Feature -->
	<div class="page_feature">
		<?php Boilerplate::drawAlertComponent(); ?>
	</div>
	<!-- END: Page Feature -->
	<!-- Page Content -->
	<div class="page_content">
		<?php if (is_array($full_width_callouts) && count($full_width_callouts)) { ?>
		<!-- Full Width Callouts -->
		<div class="full_width_callouts">
			<?php Boilerplate::drawCallouts($full_width_callouts, 'full-width', $post_id); ?>
		</div>
		<!-- END: Full Width Callouts -->
		<?php } ?>
	</div>
	<!-- END: Page Content -->
</div>
<?php
	}
	get_footer();
?>

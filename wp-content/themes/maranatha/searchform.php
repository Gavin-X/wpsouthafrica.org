<?php
/**
 * Search form
 *
 * Provides contents of get_search_form() for the search widget
 */

// No direct access
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div class="maranatha-search-form">

	<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

		<label class="screen-reader-text"><?php _e( 'Search', 'maranatha' ); ?></label>

		<div class="maranatha-search-field">
			<input type="text" name="s" />
		</div>

		<?php /* Note: submiting onClick instead of in main.js to solve issue with submit failing on mobile menu */ ?>
		<a href="#" onClick="jQuery( this ).parent( 'form' ).submit(); return false;" class="maranatha-search-button <?php maranatha_icon_class( 'search-button' ); ?>"></a>

	</form>

</div>
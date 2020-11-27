<?php
/**
 * Template for displaying user socials
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 4.0.0
 */

defined( 'ABSPATH' ) || exit;

$socials = LP_Profile::instance()->get_user()->get_profile_socials();
?>

<div class="lp-user-profile-socials">
	<?php echo implode( "\n", $socials ); ?>
</div>

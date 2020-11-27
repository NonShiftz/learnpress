<?php
/**
 * Template for displaying user time on course.
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 4.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * @var string      $status
 * @var LP_Datetime $start_time
 * @var LP_Datetime $end_time
 * @var LP_Datetime $expiration_time
 */
$time   = current_time( 'mysql', true );
$user   = LP_Global::user();
$course = LP_Global::course();
?>

<div class="course-time">
	<p class="course-time-row">
		<strong><?php esc_html_e( 'You started on:', 'learnpress' ); ?></strong>
		<time class="entry-date enrolled" datetime="<?php esc_attr( $start_time->toISO8601() ); ?>"><?php echo $start_time->format( 'M j, Y' ); ?></time>
	</p>
	<?php if ( in_array( $status, array( learn_press_user_item_in_progress_slug(), 'enrolled' ) ) ) : ?>
		<?php if ( $expiration_time ) : ?>
			<p class="course-time-row">
				<strong><?php esc_html_e( 'Course will end:', 'learnpress' ); ?></strong>
				<time class="entry-date expire" datetime="<?php esc_attr( $expiration_time->toISO8601() ); ?>"><?php echo $expiration_time->format( 'M j, Y' ); ?></time>
			</p>
		<?php else : ?>
			<p class="course-time-row">
				<strong><?php esc_html_e( 'Duration:', 'learnpress' ); ?></strong>
				<?php esc_html_e( 'Lifetime', 'learnpress' ); ?>
			</p>
		<?php endif; ?>
	<?php elseif ( $status === 'finished' && $end_time ) : ?>
		<p class="course-time-row">
			<strong><?php esc_html_e( 'You finished on:', 'learnpress' ); ?></strong>
			<time class="entry-date finished" datetime="<?php esc_attr( $end_time->toISO8601() ); ?>"><?php echo $end_time->format( 'M j, Y' ); ?></time>
		</p>
	<?php endif; ?>
</div>

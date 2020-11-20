<?php
/**
 * Template for displaying modal overlay.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/global/lp-modal-overlay.php.
 *
 * @author  tungnx
 * @package  Learnpress/Templates
 * @version  1.0.0
 */
?>

<div class="lp-modal-dialog">
    <div class="lp-modal-content">
        <div class="lp-modal-header">
            <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="lp-modal-body">
            <p class="message">Message modal</p>
        </div>
        <div class="lp-modal-footer">
            <button type="button" class="lp-button btn-yes"><?php esc_html_e( 'Yes', 'learnpress' ); ?></button>
            <button type="button" class="lp-button btn-no"><?php esc_html_e( 'No', 'learnpress' ); ?></button>
        </div>
    </div>
</div>

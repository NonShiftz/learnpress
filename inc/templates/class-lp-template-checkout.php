<?php

/**
 * Class LP_Template_Checkout
 *
 * Groups templates related checkout page
 *
 * @since 3.x.x
 */
class LP_Template_Checkout extends LP_Abstract_Template {

	/**
	 * LP_Template_Checkout constructor.
	 */
	public function __construct() {
		parent::__construct();
	}

	public function review_order(){
	    learn_press_get_template('checkout/review-order');
    }

    public function payment(){
	    learn_press_get_template('checkout/payment');
    }

    public function account_logged_in(){
	    learn_press_get_template('checkout/account-logged-in');
    }

	public function account_login(){
		learn_press_get_template('checkout/account-login');
	}

	public function account_register(){
		learn_press_get_template('checkout/account-register');
	}

	public function terms(){
		learn_press_get_template('checkout/term-conditions');
	}
}

return new LP_Template_Checkout();
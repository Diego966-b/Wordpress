<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'wppb_enable_admin_approval_confirmation', '__return_false' );
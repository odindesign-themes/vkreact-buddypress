<?php
/**
 * Vikinger Reactions - BuddyPress Integration ACTIVITY AJAX
 * 
 * @since 1.0.0
 */

/**
 * Create a user reaction for an activity
 */
function vkreact_bp_create_activity_user_reaction_ajax() {
  $result = vkreact_bp_create_activity_user_reaction($_POST['args']);

  header('Content-Type: application/json');
  echo json_encode($result);

  wp_die();
}

add_action('wp_ajax_vkreact_bp_create_activity_user_reaction_ajax', 'vkreact_bp_create_activity_user_reaction_ajax');
add_action('wp_ajax_nopriv_vkreact_bp_create_activity_user_reaction_ajax', 'vkreact_bp_create_activity_user_reaction_ajax');

/**
 * Delete a user reaction for an activity
 */
function vkreact_bp_delete_activity_user_reaction_ajax() {
  $result = vkreact_bp_delete_activity_user_reaction($_POST['args']);

  header('Content-Type: application/json');
  echo json_encode($result);

  wp_die();
}

add_action('wp_ajax_vkreact_bp_delete_activity_user_reaction_ajax', 'vkreact_bp_delete_activity_user_reaction_ajax');
add_action('wp_ajax_nopriv_vkreact_bp_delete_activity_user_reaction_ajax', 'vkreact_bp_delete_activity_user_reaction_ajax');

?>
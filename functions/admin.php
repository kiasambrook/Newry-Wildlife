<?php
/**
 * Remove all dashboard widgets from admin
 */
function remove_all_dashboard_widgets() {
    global $wp_meta_boxes;

    // Unset all dashboard widgets
    $wp_meta_boxes['dashboard'] = [];

    remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal');
    remove_meta_box('yoast_seo_dashboard_seo_score', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'remove_all_dashboard_widgets', 10);

function disable_plugin_admin_notices() {
    // Remove notices in the normal priority
    remove_all_actions('admin_notices');
    // Remove notices with late priority
    remove_all_actions('all_admin_notices');
}
add_action('admin_init', 'disable_plugin_admin_notices');

function ninja_form_dashboard_widget() {
    wp_add_dashboard_widget(
        'ninja_forms_dashboard_widget',
        'Ninja Forms',
        'ninja_forms_dashboard_widget_content'
    );
}
add_action('wp_dashboard_setup', 'ninja_form_dashboard_widget');

function ninja_forms_dashboard_widget_content() {
    echo '<p>Here are the latest submissions from the contact form:</p>';
    $subs = Ninja_Forms()->form(1)->get_subs();
    // limit to 5 submissions
    $subs = array_slice($subs, 0, 5);
    echo '<ul>';
    foreach ($subs as $sub) {
        // link to submission message
        echo '<li><a href="' . admin_url('post.php?post=' . $sub->get_id() . '&action=edit') . '">View</a> | ' . $sub->get_field_value('name') . ' | ' . $sub->get_sub_date() . '</li>';
    }
    echo '</ul>';
}

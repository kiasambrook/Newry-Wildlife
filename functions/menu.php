<?php 
// Add a top-level menu for the theme settings
function theme_settings_menu() {
    add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'theme_settings_page', 'dashicons-admin-generic');
}
add_action('admin_menu', 'theme_settings_menu');

// Define the settings page content
function theme_settings_page() {
    ?>
    <div class="wrap">
        <h1>Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('theme-settings-group');
            do_settings_sections('theme-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Add settings fields and sections
function theme_settings_init() {
    add_settings_section('general_section', 'General Settings', 'general_section_callback', 'theme-settings');

    add_settings_field('logo_url', 'Logo URL', 'logo_url_callback', 'theme-settings', 'general_section');
    register_setting('theme-settings-group', 'logo_url');

    add_settings_field('contact_email', 'Contact Email', 'contact_email_callback', 'theme-settings', 'general_section');
    register_setting('theme-settings-group', 'contact_email');

    add_settings_field('twitter', 'Twitter Account URL', 'twitter_callback', 'theme-settings', 'general_section');
    register_setting('theme-settings-group', 'twitter');

    add_settings_field('instagram', 'Instagram Account URL', 'insta_callback', 'theme-settings', 'general_section');
    register_setting('theme-settings-group', 'instagram');

    add_settings_field('linkedin', 'Linkedin Account URL', 'linkedin_callback', 'theme-settings', 'general_section');
    register_setting('theme-settings-group', 'linkedin');
}
add_action('admin_init', 'theme_settings_init');

// Callback functions for settings fields
function general_section_callback() {
    echo '<p>General theme settings.</p>';
}

function logo_url_callback() {
    $logo_url = esc_attr(get_option('logo_url'));
    echo "<input type='text' name='logo_url' value='$logo_url' class='regular-text'>";
}

function contact_email_callback() {
    $contact_email = esc_attr(get_option('contact_email'));
    echo "<input type='email' name='contact_email' value='$contact_email' class='regular-text'>";
}

function twitter_callback() {
    $twitter_account = esc_attr(get_option('twitter'));
    echo "<input type='text' name='twitter' value='$twitter_account' class='regular-text'>";
}

function insta_callback() {
    $instagram_account = esc_attr(get_option('instagram'));
    echo "<input type='text' name='instagram' value='$instagram_account' class='regular-text'>";
}

function linkedin_callback() {
    $linkedin_account = esc_attr(get_option('linkedin'));
    echo "<input type='text' name='linkedin' value='$linkedin_account' class='regular-text'>";
}

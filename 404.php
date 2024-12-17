<?php
get_header();
?>

<div class="error-404 not-found h-screen">
    <div class="page-content">
        <h2>Page not found! 404</h2>
        <p><?php esc_html_e('Uh-oh, looks like this page does not exist!', 'dean2023'); ?></p>
    </div><!-- .page-content -->
</div><!-- .error-404 -->

<?php
get_footer();

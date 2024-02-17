<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>


<?php
    if (is_active_sidebar( 'topbar_widget' ) ) : ?>

    <?php dynamic_sidebar( 'topbar_widget' ); ?>

<?php endif; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
    wp_body_open(); 
    $logo_url = wp_get_attachment_image_url('37', 'full');
    $logo_alt = $image_alt = get_post_meta('37', '_wp_attachment_image_alt', true);
?>

<header class="site-header">

    <div class="logo-container">
        <img class="header-logo" src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>">
    </div>

    <section class="menu-container"></section>


</header>
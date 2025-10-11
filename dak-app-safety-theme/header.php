<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="company-name">
                Defend All Kids LLC
            </div>
            <a href="<?php echo esc_url(get_theme_mod('login_url', 'https://app-safety-search-engine.streamlit.app/')); ?>" class="login-button" target="_blank" rel="noopener noreferrer">
                <?php if (get_theme_mod('login_button_text')) : ?>
                    <?php echo esc_html(get_theme_mod('login_button_text')); ?>
                <?php else : ?>
                    Login
                <?php endif; ?>
            </a>
        </div>
    </div>
</header>

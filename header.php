<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <meta charset="utf-8">
  </head>
  <body <?php body_class();?>>

    <section class="nav-bar">
            <nav>
    <?php wp_nav_menu(
        array(
          'theme_location' => 'beautiful-theme-top-menu',
          'menu_class' => 'beaut_theme_top_menu',
        )
      );?>
    </nav>
    </section>

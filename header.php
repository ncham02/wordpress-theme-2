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
          'theme_location' => 'top_menu',
          'menu_class' => 'nav-links',
        )
      );?>
    </nav>
    </section>

    <section class="main">
      <section class="graphics">
        <div class="graphic cyan"></div>
        <div class="graphic green"></div>
        <div class="graphic yellow"></div>
        <div class="graphic red"></div>
      </section>

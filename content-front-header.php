<header role="banner" class="site-head site-header first-screen">
  <div class="container-fluid the-logo">
    <img id="shine" class="logo-shine" src="<?php echo get_stylesheet_directory_uri() .'/img/shine2.svg'; ?>" />
    <img class="logo" alt="The Lord of the P.I.G.S." src="<?php echo get_stylesheet_directory_uri() . '/img/pigs-logo.svg'; ?>" />
  </div>

  <!-- characters -->
  <img class="character-header character-header-red"
       alt="RED"
       src="<?php echo get_stylesheet_directory_uri() . '/img/ch-red.sm.png'; ?>"
  />

  <img class="character-header character-header-blue"
       alt="BLUE"
       src="<?php echo get_stylesheet_directory_uri() . '/img/ch-blue.sm.png'; ?>"
  />

  <img class="character-header character-header-green"
       alt="GREEN"
       src="<?php echo get_stylesheet_directory_uri() . '/img/ch-green.sm.png'; ?>"
  />

  <img class="character-header character-header-yellow"
       alt="YELLOW"
       src="<?php echo get_stylesheet_directory_uri() . '/img/ch-yellow.sm.png'; ?>"
  />

  <?php if (function_exists('pll_the_languages')): ?>
  <ul class="languages">
      <?php foreach (pll_the_languages(array('hide_if_empty' => false, 'raw' => true)) as $lang): ?>

        <li class="language language-<?php echo $lang['slug']; ?><?php if ($lang['current_lang']): ?> language-selected<?php endif; ?>">
          <a href="<?php echo $lang['url']; ?>" class="language-change" data-language="<?php echo $lang['slug']; ?>">
            <?php echo $lang['name']; ?>
          </a>
        </li>

      <?php endforeach ?>
  </ul>
  <?php endif ?>

  <?php get_template_part('content', 'social'); ?>
</header>
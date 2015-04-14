<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">The Lord of the P.I.G.S.</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav navbar-right',

            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker()
        ));?>
    </div>
  </div>

</nav>

<div class="navbar-padding"></div>
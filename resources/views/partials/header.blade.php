<header class="banner main-header">
  <div class="container-fluid">
      <nav class="navbar mr-auto px-100 main-navigation fixed-top navbar-expand-lg" role="navigation">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
          </button>
          <a class="navbar-brand order-first header-logo" href="{{ home_url('/') }}"><img
                  src="/wp-content/themes/sage/resources/assets/images/ntproject.svg" width="130px"
                  alt="{{ get_bloginfo('name', 'display') }}" /></a>
          <div class="collapse collapse-header navbar-collapse justify-content-end nav-primary align-top header-elements"
              id="navbarSupportedContent">
              @if (has_nav_menu('primary_navigation'))
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
@endif
          </div>
      </nav>
  </div>
</header>
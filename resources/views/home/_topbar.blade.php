<div class="navbar md-whiteframe-z1 no-radius pink-1000">
  <!-- Page title - Bind to $state's title -->
  <div class="navbar-item pull-left h4">
    <a class="navbar-brand" href="/">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                  width: 24px; height: 24px;">
            <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
            <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
            <path d="M 8 80 L 50 0 L 50 100 Z" fill="#f3f3f3"></path>
            <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(220, 220, 220, 0.6)"></path>
        </svg>

        {{-- <img src="images/logo.png" alt="." style="max-height: 36px; display:none"> --}}
        <span class="hidden-folded m-l inline ">{{Lang::get('titles.app')}}</span>
    </a>
  </div>

  <ul class="nav nav-sm navbar-tool pull-right brandon">
    @if (Auth::guest())
        <li>
            <a md-ink-ripple href="register">SIGN UP</a>
        </li>

        <li>
          <a md-ink-ripple href="login">SIGN IN</a>
        </li>

        <li>
          <a md-ink-ripple ui-toggle-class="show" target="#search"> <i class="mdi-action-search i-24"></i></a>
        </li>
    @else
        <li>
          <a md-ink-ripple ui-toggle-class="show" target="#search"><i class="mdi-action-search i-24"></i></a>
        </li>

      <li>
          <a md-ink-ripple data-toggle="modal" data-target="#useronline"><i class="mdi-social-person-outline i-24"></i></a>
      </li>

      <li class="dropdown">
          <a md-ink-ripple data-toggle="modal" data-target="#logout"><i class="mdi-action-exit-to-app i-24"></i></a>
      </li>

    @endif
    
  </ul>

  <div class="pull-right" ui-view="navbar@"></div>


  <div id="search" class="pos-abt w-full h-full pink-1000 hide">
      <div class="box">
          <div class="box-col w-56 text-center">

            <a md-ink-ripple class="navbar-item inline"  ui-toggle-class="show" target="#search"><i class="mdi-navigation-arrow-back i-24"></i></a>
        </div>
        <div class="box-col v-m">

            <input class="form-control input-lg no-bg no-border" placeholder="Search" ng-model="app.search.content">
        </div>

        <div class="box-col w-56 text-center">
            <a md-ink-ripple class="navbar-item inline"><i class="mdi-action-search i-24"></i></a>
        </div>
    </div>
</div>

</div>

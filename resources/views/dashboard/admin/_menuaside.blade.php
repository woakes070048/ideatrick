<aside id="aside" class="app-aside modal fade" role="menu">
    <div class="left">
        <div class="box bg-white">
            <div class="navbar md-whiteframe-z1 no-radius blue">
                <a class="navbar-brand">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                  width: 24px; height: 24px;">
                        <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
                        <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
                        <path d="M 8 80 L 50 0 L 50 100 Z" fill="#f3f3f3"></path>
                        <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(220, 220, 220, 0.6)"></path>
                    </svg>

                    <img src="images/logo.png" alt="." style="max-height: 36px; display:none">
                    <span class="hidden-folded m-l inline">{{Lang::get('titles.app')}}</span>
                </a>
            </div>

            <div class="box-row">
                <div class="box-cell scrollable hover">
                    <div class="box-inner">

                        <div class="p hidden-folded blue-50" style="background-image:url(images/bg.png); background-size:cover">
                            <div class="rounded w-64 bg-white inline pos-rlt">
                                <img src="images/a0.jpg" class="img-responsive rounded">
                            </div>
                            <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                                <span class="block font-bold">John Smith</span>
                                <span class="pull-right auto">
                                    <i class="fa inline fa-caret-down"></i>
                                    <i class="fa none fa-caret-up"></i>
                                </span>
                                john.smith@gmail.com
                            </a>
                        </div>

                        <div id="nav">
                            <nav ui-nav>
                                <ul class="nav">
                                    <li class="nav-header m-v-sm hidden-folded text-right">
                                        <a class="nav-item" ui-toggle-class="folded" target="#aside">
                                            <i class="blue mdi-action-swap-horiz i-20"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="pull-right up"><b class="badge no-bg">2</b></i>
                                            <i class="icon mdi-action-settings-input-svideo i-20"></i>
                                            <span class="font-normal">Dashboard</span>
                                        </a>

                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="index.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="dashboard.analysis.html">Analysis</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="dashboard.wall.html">Wall</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>

                                            <i class="icon mdi-action-subject i-20"></i>
                                            <span class="font-normal">Components</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="ui.component.arrow.html">Arrow</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="pull-right up"><b class="badge bg-success">14</b></i>
                                            <i class="icon mdi-image-flash-on i-20"></i>
                                            <span class="font-normal">Material</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="ui.material.button.html">Button</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="ui.material.icon.html">Icon</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="b-b b m-v-sm"></li>
                                    <li>
                                        <a md-ink-ripple ui-toggle-class="hide, show" target="#nav, #account">
                                            <span>Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="page.document.html">
                                            <span>Document</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div id="account" class="hide m-v-xs">
                            <nav>
                                <ul class="nav">
                                    <li>
                                        <a md-ink-ripple href="page.profile.html">
                                            <i class="icon mdi-action-perm-contact-cal i-20"></i>
                                            <span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="page.settings.html">
                                            <i class="icon mdi-action-settings i-20"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="lockme.html">
                                            <i class="icon mdi-action-exit-to-app i-20"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>

                                    <li class="m-v-sm b-b b"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <ul class="nav b-t b">
                    <li>
                        <a href="http://themeforest.net/item/materil-responsive-admin-dashboard-template/11062969" target="_blank" md-ink-ripple>
                            <i class="icon mdi-action-help i-20"></i>
                            <span>Feedback</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>

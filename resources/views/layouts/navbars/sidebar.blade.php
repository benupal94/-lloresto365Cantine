<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
        </button>
        </span>
    </div>
    <div class="header-btn-lg pr-0">
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="btn-group">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <button tabindex="0" class="dropdown-item mm-active">Mon compte</button>
                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <button type="button" tabindex="0" class="dropdown-item">Se deconnecter</button>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left  ml-3 header-user-info">
                    <div class="widget-heading">
                        Alina Mclourd
                    </div>
                    <div class="widget-subheading">
                        VP People Manager
                    </div>
                </div>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading app-main">Mon espace</li><br>
                        <li>
                            <a href="index.html" class="mm-active">
                                <i class="metismenu-icon pe-7s-users">
                                    </i>{{ __('Liste du personnel') }}
                            </a>
                        </li><br>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-plus">
                                    </i>{{ __('Ajouter un personnel') }}
                            </a>
                        </li><br>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-cash">
                                    </i>{{ __('Attribuer bon de restauration') }}
                            </a>
                        </li><br>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-piggy">
                                    </i>{{ __('Consulter bon de restauration') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
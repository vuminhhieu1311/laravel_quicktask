<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ route('home') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>{{ __('messages.dashboard') }}</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>{{ __('messages.categories') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="">{{ __('messages.add-category') }}</a></li>
                        <li><a href="">{{ __('messages.list-category') }}</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>{{ __('messages.products') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="">{{ __('messages.add-product') }}</a></li>
                        <li><a href="">{{ __('messages.list-product') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>

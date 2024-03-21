<div class="dashboard-navigation">
    <div id="dashboard-Navigation" class="slick-nav"></div>
    <div id="navigation" class="navigation-container">
        <ul>
            <li class="active-menu"><a href="{{ route('dashboard') }}"><i class="far fa-chart-bar"></i> Dashboard</a></li>

            <li>
                <a> <i class="fas fa-boxes"></i>Services</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.create.service') }}">
                            <i class="fa fa-plus"></i>Add</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.index.services') }}">
                            <i class="fas fa-folder"></i> All Services</a>
                    </li>
                </ul>
            </li>

            <li>
                <a> <i class="fas fa-list"></i> SEO Pages</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.index.pages') }}">
                            <i class="fas fa-folder"></i> All SEO Pages</a>
                    </li>
                </ul>
            </li>

            <li><a><i class="fas fa-user"></i>Users</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.create.user') }}">
                            <i class="fa fa-plus"></i>Add</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.index.users') }} " rd.users.list') }}">
                            <i class="fas fa-folder"></i>All Users</a>
                    </li>
                </ul>
            </li>
            <li class="pt-4 text-danger">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button style="color: #FFF; border: none !important; background-color: rgba(0, 0, 0, 0);">
                        <span class="mx-3">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span class="text-danger">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>

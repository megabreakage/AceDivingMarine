<div class="dashboard-navigation">
    <div id="dashboard-Navigation" class="slick-nav"></div>
    <div id="navigation" class="navigation-container">
        <ul>
            <li class="active-menu"><a href="{{ route('dashboard') }}"><i class="far fa-chart-bar"></i> Dashboard</a></li>

            <li>
                <a><i class="fas fa-umbrella-beach"></i></i>Destinations</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.destination.create') }}">
                            <i class="fas fa-plus"></i> Add</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.destinations.all') }}">
                            <i class="fas fa-folder"></i> All</a>
                    </li>
                </ul>
            </li>

            <li>
                <a> <i class="fas fa-boxes"></i> Packages</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.package.create') }}">
                            <i class="fa fa-plus"></i>Add</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.list-all') }}">
                            <i class="fas fa-folder"></i> All Packages</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.active') }}">
                            <i class="fas fa-folder"></i> Active</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.inactive') }}">
                            <i class="fas fa-folder"></i> In-Active</a>
                    </li>
                </ul>
            </li>

            <li>
                <a> <i class="fas fa-hotel"></i> Hotels</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.hotels.create') }}">
                            <i class="fa fa-plus"></i>Add</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.hotels.all') }}">
                            <i class="fas fa-folder"></i>All Hotels</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('dashboard.bookings.all') }}">
                    <i class="fas fa-ticket-alt"></i> Booking & Enquiry</a>
            </li>

            <li>
                <a><i class="fas fa-comments"></i></i>Reviews</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.active') }}">
                            <i class="fas fa-folder"></i> All Reviews</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.active') }}">
                            <i class="fas fa-folder"></i> Destination Reviews</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.expired') }}">
                            <i class="fas fa-folder"></i> Hotel Reviews </a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.packages.expired') }}">
                            <i class="fas fa-folder"></i> Package Reviews </a>
                    </li>
                </ul>
            </li>

            <li>
                <a> <i class="fas fa-list"></i> SEO Pages</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.seo-pages.list') }}">
                            <i class="fas fa-folder"></i> All SEO Pages</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.content.home') }}">
                            <i class="fas fa-folder"></i> Home Sections</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.content.faqs') }}">
                            <i class="fas fa-folder"></i> FAQs</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.content.terms') }}">
                            <i class="fas fa-folder"></i> Terms & Conditions</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.content.policy') }}">
                            <i class="fas fa-folder"></i> Privacy Policy</a>
                    </li>
                </ul>
            </li>

            <li><a><i class="fas fa-user"></i>Users</a>
                <ul>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.user.create') }}">
                            <i class="fa fa-plus"></i>Add</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="{{ route('dashboard.users.list') }} " rd.users.list') }}">
                            <i class="fas fa-folder"></i>All Users</a>
                    </li>
                </ul>
            </li>
            <li>
                <a><i class="fas fa-cogs"></i></i>Lists Settings</a>
                <ul>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Categories</a></li>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Journey Types</a></li>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Countries & Towns</a></li>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Roles & Permissions</a></li>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Drive Types</a></li>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Contact Types</a></li>
                    <li class="sub-menu-item"><a href="#"><i class="fas fa-list"></i>Statuses</a></li>
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

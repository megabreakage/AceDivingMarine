<div class="dashboard-header sticky-header">
    <div class="content-left  logo-section pull-left">
        <h1><a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/Logos/adm-logo-full.png') }}"
                    alt=""></a>
        </h1>
    </div>
    <div class="heaer-content-right pull-right">

        {{-- @include('admin.layouts.notifications') --}}

        <div class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="dropdown-item profile-sec">
                    <img loading="lazy" src="{{ asset('assets/admin/images/comment4.jpg') }}" alt="">
                    <span>Hi {{ $user['firstname'] }}, </span>
                    <i class="fas fa-caret-down"></i>
                </div>
            </a>
            <div class="dropdown-menu account-menu">
                <ul>
                    <li><a href="{{ route('dashboard.show.user', $user['id']) }}"><i
                                class="fas fa-user-tie"></i>Profile</a></li>
                    <li><a href="{{ route('dashboard.edit.user', $user['id']) }}"><i class="fas fa-key"></i>Password</a>
                    </li>
                    <li class="mb-2">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button style="border: none !important; background-color: #fff;">
                                <span class="mx-2">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.dashboard-navigation')

<style>
    .logo-section img loading="lazy" {
        height: 50px !important;
    }
</style>

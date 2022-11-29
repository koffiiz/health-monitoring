<x-app-layout>
    @php
        $headerTitle = "Profile";
        $headerBackUrl = "/dashboard";
    @endphp

    <x-app-header :headerTitle="$headerTitle" :headerBackUrl="$headerBackUrl"/>

    <div class="avatar__container container">
        <div class="avatar--info__wrapper">
            <img class="" src="{{ asset('/assets/images/avatar.png')  }}" alt="{user.handle}" />
            <div class="avatar--details__wrapper flex flex-col">
                <h3>{{ strtok(auth()->user()->first_name, ' ');}}</h3>
                <p>Health</p>
            </div>
        </div>

        <div class="avatar--btn__wrapper">
            <a class="button" href="{{ route('edit-profile') }}">Edit</a>
        </div>
    </div>

    <div class="cards__container container">
        <div class="card__wrapper">
            <div class="card">
                <h3>{{auth()->user()->height}}cm</h3>
                <p>Height</p>
            </div>
        </div>

        <div class="card__wrapper">
            <div class="card">
                <h3>{{auth()->user()->weight}}kg</h3>
                <p>Weight</p>
            </div>
        </div>

        <div class="card__wrapper">
            <div class="card">
                <h3>{{date_diff(date_create(auth()->user()->birthday), date_create('now'))->y}}yo</h3>
                <p>Age</p>
            </div>
        </div>
    </div>

    <div class="account__container container">
        <div class="account__wrapper">
            <h3>Account</h3>
            <h6><i class="fa-regular fa-user"></i>Personal Data <i class="fa-solid fa-chevron-right"></i></h6>
            <h6><i class="fa-solid fa-chart-pie"></i>Activity History <i class="fa-solid fa-chevron-right"></i></h6>
        </div>
    </div>

    <div class="notification--setting__container container">
        <div class="notification--setting__wrapper">
            <h3>Notification</h3>
            <div class="btn-switch__wrapper">
                <h6><i class="fa-solid fa-bell"></i>Pop-up Notification</h6>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="navi-botoom-container">
                <div class="navi-container-item">
                    <div class="item-navi-icon">
                        <a href="{{ route('dashboard') }}">
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </div>
                    <div class="item-navi-icon">
                        <a href="">
                            <i class="fa-brands fa-facebook-messenger"></i>
                        </a>
                    </div>
                    <div class="item-navi-icon item-navi-search">
                        <span class="search-nav-bottom">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                    <div class="item-navi-icon">
                        <a href="">
                            <i class="fa-solid fa-camera"></i>
                        </a>
                    </div>
                    <div class="item-navi-icon">
                        <a href="{{ route('profile') }}">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</x-app-layout>

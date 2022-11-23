<x-app-layout>
    <div class="header__container container">
        <div class="header__wrapper">
            <a href="{{ url()->previous() }}"><i class="fa-solid fa-chevron-left"></i></a>
            <h1>Profile</h1>
            <a href="javascript:{}"><i class="fa-solid fa-ellipsis"></i></a>
            <div class="dropdown-menu">
                <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                    @csrf
                    <a class="btn-logout" href="javascript:{}" onclick="document.getElementById('logoutForm').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>

    </div>
    <div class="avatar__container container">
        <div class="avatar--info__wrapper">
            <img class="" src="{{ asset('/assets/images/avatar.png')  }}" alt="{user.handle}" />
            <div class="avatar--details__wrapper flex flex-col">
                <h3>{{ strtok(auth()->user()->name, ' ');}}</h3>
                <p>Health</p>
            </div>
        </div>

        <div class="avatar--btn__wrapper">
            <button>Edit</button>
        </div>
    </div>

    <div class="cards__container container">
        <div class="card__wrapper">
            <div class="card">
                <h3>{{auth()->user()->height}}</h3>
                <p>Height</p>
            </div>
        </div>

        <div class="card__wrapper">
            <div class="card">
                <h3>{{auth()->user()->weight}}</h3>
                <p>Weight</p>
            </div>
        </div>

        <div class="card__wrapper">
            <div class="card">
                <h3>{{date_diff(date_create(auth()->user()->birthday), date_create('now'))->y}}</h3>
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
</x-app-layout>

<script>
    jQuery(document).ready(function() {
        $('.header__wrapper a:has(.fa-ellipsis)').click(function() {
            $(this).next().toggleClass('show');
        })
    });
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity Tracker') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="profile-container">
            <div class="profile-row">
                <div class="profile-first-row profile-heading">
                    <img src="assets/Back-Navs.png" > <h2>Profile</h2> <img src="assets/Detail-Navs.png" >
                </div>
                <div class="profile-second-row profile-second-section">
                    <div class="profile-info-col1">
                        <div class="profile-file-img">
                            <img src="assets/Latest-Pic.png" alt="">
                        </div>
                    </div>
                    <div class="profile-info-col2">
                        <p>Kofiiz</p>
                        <p>Health</p>
                    </div>
                    <div class="profile-info-col3">
                        <button>Edit</button>
                    </div>
                    <div class="boxes-container">
                        <div class="box-item box-height">
                            <p>180cm</p>
                            <p>Height</p>
                        </div>
                        <div class="box-item box-weight">
                            <p>180kg</p>
                            <p>Weight</p>
                        </div>
                        <div class="box-item box-age">
                            <p>32</p>
                            <p>Age</p>
                        </div>
                    </div>
                </div>
                <div class="profile-third-row">
                    <h3>Account</h3>
                    <div class="account-prof-container">
                        <div class="account-prof-items">
                            <div class="account-prof account-prof-item-img">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="account-prof account-prof-item-data">
                                <p>Personal Data</p>
                            </div>
                            <div class="account-prof account-prof-item-icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="account-prof-items">
                            <div class="account-prof account-prof-item-img">
                                <i class="fa-solid fa-chart-pie"></i>
                            </div>
                            <div class="account-prof account-prof-item-data">
                                <p>Activity History</p>
                            </div>
                            <div class="account-prof account-prof-item-icon">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-fourth-row">
                    <h3>Notification</h3>
                    <div class="notification-prof-container">
                        <d  iv class="notification-prof-items">
                            <div class="notification-prof notification-prof-item-img">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div class="notification-prof notification-prof-item-data">
                                <p>Pop-up Notification</p>
                            </div>
                            <div class="notification-prof notification-prof-item-icon">
                                <input type="checkbox" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-fifth-row">
                    <div class="navi-botoom-container">
                        <div class="navi-container-item">
                            <div class="item-navi-icon">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="item-navi-icon">
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="item-navi-icon item-navi-search">
                                <span class="search-nav-bottom">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                            </div>
                            <div class="item-navi-icon">
                                <i class="fa-solid fa-camera"></i>
                            </div>
                            <div class="item-navi-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</x-app-layout>
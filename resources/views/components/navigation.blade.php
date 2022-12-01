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
                    <a href="{{ route('activity-tracker') }}">
                        <i class="fas fa-tasks"></i>
                    </a>
                </div>
                {{-- <div class="item-navi-icon item-navi-search">
                    <span class="search-nav-bottom">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div> --}}
                {{-- <div class="item-navi-icon">
                    <a href="">
                        <i class="fa-solid fa-camera"></i>
                    </a>
                </div> --}}
                <div class="item-navi-icon">
                    <a href="{{ route('profile') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
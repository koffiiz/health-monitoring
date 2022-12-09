<div class="header__container container">
    <div class="header__wrapper">
        <a href="{{ url('/') }}"><i class="fa-solid fa-chevron-left"></i></a>
        <h1>{{ $headerTitle }}</h1>
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

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script defer>
    jQuery(document).ready(function() {
        $('.header__wrapper a:has(.fa-ellipsis)').click(function() {
            $(this).next().toggleClass('show');
        })
    });
</script>
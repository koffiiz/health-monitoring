<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <section id="dashboard-page">
            <div class="container">
                <div class="row">
                    <div class="content dashboard">
                        <h6>Welcome Back</h6>
                        <h1>{{ $user->first_name }}</h1>
                        <div class="pin"><a href="{{ route('notification') }}"><i class="fa-solid fa-bell"></i></a></div>
                        <div class="radial--section--contaier">
                            <div class="radial--section--row">
                                <div class="dot-overlay"></div>
                                <div class="radial--col--one">
                                    <h2>BMI (Body Mass Index)</h2>
                                    <p>{{ $userData['BMI']['message'] }}</p>
                                    <a href='{{route('bmi-index')}}' class="btn-pink button">View More</a>
                                </div>
                                <div class="radial--col--two">
                                    <div class="radial--full--circle"></div>
                                    <div class="radial--half--circle"></div>
                                    <div class="radial--circle--container">
                                        <p>{{ $userData['BMI']['value'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="target--check--section">
                            <div class="target--check--row">
                                <div class="target-check-content">
                                    <h2>Today Target</h2>
                                    <a class="button" href={{ route('activity-tracker') }}>Check</a>
                                </div>
                            </div>
                            <div class="target-check-cotnent">
                                <h1>Activity Status</h1>
                            </div>
                            <div class="progress-boxes">
                                <div class="content-box-item">
                                    <div class="target--check--row">
                                        <div class="target--col-one">
                                            <div class="barcontainer">
                                                <div class="bar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="target__col__two__row__three">
                                            <div class="target__col__two__row__two">
                                            </div>
                                            <h2>Water Intake</h2>
                                            <h1>4 Liters</h1>
                                            <p>Real time updates</p>
                                            <ul>
                                                <li>6am - 8am</li>
                                                <p>600ml</p>
                                                <li>9am - 11am</li>
                                                <p>500ml</p>
                                                <li>11am - 2pm</li>
                                                <p>1000ml</p>
                                                <li>2pm - 4pm</li>
                                                <p>700ml</p>
                                                <li>4pm - now</li>
                                                <p>900ml</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="target--col-three">
                                    <div class="target__col__three__row__one">
                                        <h2>Sleep</h2>
                                        <h1>8h 20m</h1>
                                        <img src="{{ asset('/assets/images/Sleep-Graph.png')  }}">
                                    </div>
                                    <div class="target__col__three__row__two">
                                        <h2>Calories</h2>
                                        <h1>760 kCal</h1>
                                        <img src="{{ asset('/assets/images/calories-pie.png')  }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="navi-botoom-container">
                    <div class="navi-container-item">
                        <div class="item-navi-icon">
                            <a href="">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </div>
                        <div class="item-navi-icon">
                            <a href="{{ route('dashboard') }}">
                                <i class="fa-solid fa-bell"></i>
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
    </div>
</x-app-layout>
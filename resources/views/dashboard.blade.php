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
                                        <h4>{{ $userData['BMI']['value'] }}</h4>
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
                                                @php
                                                    $waterIntakePercent = ( $totalWaterIntake / 4000 ) * 100;
                                                    if($waterIntakePercent > 100) {
                                                        $waterIntakePercent = 100;
                                                    }
                                                @endphp
                                                <div class="bar" style="height: {{ $waterIntakePercent }}%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="target__col__two__row__three">
                                            <div class="target__col__two__row__two">
                                            </div>

                                            <h2>Target</h2>
                                            <h1> 4000 ML </h1>
                                            
                                            <h2>Water Intake</h2>
                                            <h1> {{ $totalWaterIntake }} ML </h1>
                                            <p>Real time updates</p>
                                            <ul>
                                                @foreach ($waterIntakes as $waterIntake)
                                                    <li> {{ $waterIntake->created_at->format('h i A') }} </li>
                                                    <p>{{ $waterIntake->water_intake }} ml</p>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="target--col-three">
                                    <div class="target__col__three__row__one">
                                        <h2>Total Sleep</h2>
                                        <h1>{{ $totalSleep }}</h1>
                                        <img src="{{ asset('/assets/images/Sleep-Graph.png')  }}">
                                    </div>
                                    <div class="target__col__three__row__two">
                                        <h2>Needed Calorie Intake</h2>
                                        <h1>{{ $calorieIntake }}</h1>
                                        {{-- <img src="{{ asset('/assets/images/calories-pie.png')  }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-navigation />
    </div>
</x-app-layout>
<x-app-layout>
        @php
         $headerTitle = "Activity Tracker";
        @endphp

        <x-app-header :headerTitle="$headerTitle" />
    <div class="py-12">
        <div class="tracker-container">
            <div class="tracker-row">
                <div class="tracker-second-row tracker-second-section">
                    <div class="tracker-target-row1">
                        <h3>Today Target</h3> <img src="/assets/images/Buttonplus.png">
                    </div>
                    <div class="tracker-target-row2">
                        <a href="{{ route('water-intake') }}" style="width: 100%; text-decoration: none">
                            <div class="target-row-col1">
                                <div class="target-glass-shoes">
                                        <img src="{{ asset('/assets/images/object.png ')  }}" alt="">
                                </div>
                                <div class="target-text">
                                    <p>4000 ML</p>
                                    <p>Water Intake</p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('water-intake') }}" style="width: 100%; text-decoration: none">
                            <div class="target-row-col1">
                                <div class="target-glass-shoes">
                                        <img src="{{ asset('/assets/images/sleep.svg ')  }}" alt="" width="100%">
                                </div>
                                <div class="target-text">
                                    <p>8 Hrs</p>
                                    <p>Sleep</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    
                </div>
    
            </div>

            <div class="activity-chart--container">
                <h4 class="activity-chart--header">Water Activity Progress</h4>
                <div class="activity-chart">
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Sun </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Mon </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Tue </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Wed </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Thur </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Fri </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Sat </p>
                    </div>
                </div>
            </div>

            <div class="activity-chart--container">
                <h4 class="activity-chart--header">Sleep Activity Progress</h4>
                <div class="activity-chart">
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Sun </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Mon </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Tue </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Wed </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Thur </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Fri </p>
                    </div>
                    <div class="chart-col">
                        <div class="barcontainer">
                            <div class="bar"></div>
                        </div>
                        <p> Sat </p>
                    </div>
                </div>
            </div>

            <div class="latest-activity--container">
                <h4 class="activity-chart--header">Latest Activity</h4>
                    @foreach ( $user->activity as $activity )
                        <div class="latest-activity--card"> 
                            <div class="latest-activity--thumbnail">
                                <img class="" src="{{ asset('/assets/images/avatar.png')  }}" width="55" height="55"/>
                            </div>
                            <div class="latest-activity--content">
                                <h5> {{ $activity->activity_title }}</h5>
                                <p> {{ $activity->created_at->diffForHumans() }} </p>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>

        <x-navigation />
</x-app-layout>
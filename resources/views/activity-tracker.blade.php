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

                        <a href="{{ route('sleep-tracker') }}" style="width: 100%; text-decoration: none">
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
                    @foreach ($lastWeekWaterActivity as $waterActivityGroup )
                        @php
                            $dayTotalWaterIntake = 0; 
                        @endphp
                        @foreach ( $waterActivityGroup as $waterActivity)
                            @php
                                $dayTotalWaterIntake += $waterActivity->water_intake;
                            @endphp                  
                        @endforeach
                        @php
                            $waterIntakePercent = ( $dayTotalWaterIntake / 4000 ) * 100;

                            if($waterIntakePercent > 100) {
                                $waterIntakePercent = 100;
                            }
                        @endphp
                        <div class="chart-col">
                            <div class="barcontainer">
                                <div class="bar"style="height: {{ $waterIntakePercent }}%"></div>
                            </div>
                            <p> {{ date_format(date_create($waterActivityGroup[0]->created_at), "D")  }} </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="activity-chart--container">
                <h4 class="activity-chart--header">Sleep Activity Progress</h4>
                <div class="activity-chart">
                    @foreach ($lastWeekSleepActivity as $sleepActivityGroup )
                        @php
                            $dayTotalSleep = 0; 
                        @endphp
                        @foreach ( $sleepActivityGroup as $sleepTracker)
                            @php
                                $start = new \Carbon\Carbon($sleepTracker->sleep_start);
                                $end = new \Carbon\Carbon($sleepTracker->sleep_end);
                                $sleepDuration = $start->diff($end)->format('%H:%I:%S');
                                $secs = strtotime($dayTotalSleep)-strtotime("00:00:00");
                                $dayTotalSleep = date("H:i:s", strtotime($sleepDuration)+$secs);
                            @endphp                  
                        @endforeach
                        @php
                            
                            sscanf($dayTotalSleep, "%d:%d:%d", $hours, $minutes, $seconds);
                            $dayTotalSleepMinutes = ceil((isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes) / 60);
                            $dayTotalpercent = ($dayTotalSleepMinutes / 480) * 100;

                            if($dayTotalpercent > 100) {
                                $dayTotalpercent = 100;
                            }
                            
                        @endphp
                        <div class="chart-col">
                            <div class="barcontainer">
                                <div class="bar"style="height: {{ $dayTotalpercent }}%"></div>
                            </div>
                            <p> {{ date_format(date_create($waterActivityGroup[0]->created_at), "D")  }} </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="latest-activity--container">
                <h4 class="activity-chart--header">Latest Activity</h4>
                    @foreach ( $user_activity as $activity )
                        <div class="latest-activity--card"> 
                            <div class="latest-activity--thumbnail">
                                @if($activity->activity_type == "water") 
                                    <img class="" src="{{ asset('/assets/images/avatar.png') }}" width="55" height="55"/>
                                @else
                                    <img class="" src="{{ asset('/assets/images/sleep.svg ')  }}" width="55" height="55"/>
                                @endif
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
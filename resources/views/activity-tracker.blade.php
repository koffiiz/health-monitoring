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
                        <div class="target-row-col1">
                            <div class="target-glass-shoes">
                                    <img src="{{ asset('/assets/images/object.png ')  }}" alt="">
                            </div>
                            <div class="target-text">
                                <p>8L</p>
                                <p>Water Intake</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>

            <div class="activity-chart--container">
                <h4 class="activity-chart--header">Activity Progress</h4>
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
                <div class="latest-activity--card"> 
                    <div class="latest-activity--thumbnail">
                        <img class="" src="{{ asset('/assets/images/avatar.png')  }}" width="55" height="55"/>
                    </div>
                    <div class="latest-activity--content">
                        <h5> Drinking 300ml Water </h5>
                        <p> About 3 minutes ago </p>
                    </div>
                </div>

                <div class="latest-activity--card"> 
                    <div class="latest-activity--thumbnail">
                        <img class="" src="{{ asset('/assets/images/snack.png')  }}"  width="55" height="55"/>
                    </div>
                    <div class="latest-activity--content">
                        <h5> Eat Snack (Fitbar) </h5>
                        <p> About 10 minutes ago</p>
                    </div>
                </div>


            </div>


        </div>
</x-app-layout>
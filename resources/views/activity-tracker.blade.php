<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity Tracker') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="tracker-container">
            <div class="tracker-row">
                <div class="tracker-first-row tracker-first-section">
                    <img src="assets/Back-Navs.png" > <h2>Activity Tracker</h2> <img src="assets/Detail-Navs.png" >
                </div>
                <div class="tracker-second-row tracker-second-section">
                    <div class="tracker-target-row1">
                        <h3>Today Target</h3> <img src="assets/Buttonplus.png">
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
                        <div class="target-row-col2">
                            <div class="target-glass-shoes">
                                    <img src="{{ asset('/assets/images/Group.png')  }}" alt="">
                            </div>
                            <div class="target-text">
                                
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
</x-app-layout>
<x-app-layout>
    <div id="step-three">
        <div class="registration--textfield--one register--textfield--three">
            <div class="step_one_row1">
                <img src="{{ asset('/assets/images/stepthree.png')  }}" alt="" srcset="">
                <h1>Welcome {{ $user->name }}</h1>
                <p>You are all set now, Stay healthy and lets track your health</p>
            </div>
            <div class="step_one_row2">
                <button onclick="window.location='{{ route("dashboard")}}'" type="submit" class="btn_submit next" value="" id="">Start</i></button>
            </div>
            </div>
    </div> 
</x-app-layout>

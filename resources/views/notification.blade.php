<x-app-layout>
    @php
        $headerTitle = "Notification";
    @endphp

<x-app-header :headerTitle="$headerTitle" />

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="notification--container">

    @foreach ($userActivity as $activity)
        <div class="notification--cards">
            <div class="notification--thumbnail"> 
                @if($activity->activity_type == "water") 
                    <img class="" src="{{ asset('/assets/images/avatar.png') }}" width="55" height="55"/>
                @else
                    <img class="" src="{{ asset('/assets/images/sleep.svg ')  }}" width="55" height="55"/>
                @endif
            </div>
            <div class="notification--content">
                <h5> {{ $activity->activity_title }}</h5>
                <p> {{ $activity->created_at->diffForHumans() }} </p>
            </div>
        </div> 

        <hr style="padding: 0rem 1rem">
    @endforeach

</div>

</x-app-layout>
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
    <div class="notification--cards">
        <div class="notification--thumbnail"> 
            <img class="" src="{{ asset('/assets/images/avatar.png')  }}"  width="55" height="55"/>
        </div>
        <div class="notification--content">
                <h5> Eat Snack (Fitbar) </h5>
                <p> About 10 minutes ago</p>
        </div>
    </div> 
    <hr style="padding: 0rem 1rem">

    <div class="notification--cards">
        <div class="notification--thumbnail"> 
            <img class="" src="{{ asset('/assets/images/avatar.png')  }}"  width="55" height="55"/>
        </div>
        <div class="notification--content">
                <h5> Eat Snack (Fitbar) </h5>
                <p> About 10 minutes ago</p>
        </div>
    </div> 
    <hr style="padding: 0rem 1rem">
</div>

</x-app-layout>
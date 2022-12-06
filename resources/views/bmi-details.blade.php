<x-app-layout>

    @php
        $headerTitle = "BMI";
        $headerBackUrl = "/dashboard";
    @endphp

    <x-app-header :headerTitle="$headerTitle" :headerBackUrl="$headerBackUrl" />

    <div class='bmi-details__container'>
        <div class='bmi-image__container'>
            <img src="{{ $BMIData['image'] }}" width="75px" />
        </div>

        <div class="bmi-content__container">
            <h1> BMI Score: {{ $BMIData['value'] }}</h1>
            <p> {{ $BMIData['message'] }} </p>
        </div>

        <hr>

        <div class="bmi-tips__container">
            <p> {{ $BMIData['tips']['tipsHeader'] }} </p>
            <h2> Tips: </h2>

            @foreach ($BMIData['tips']['tipsList'] as $key => $tip)
            <div class="tip__container">
                <h5> {{ $tip['title'] }} </h5>
                <p> {{ $tip['description'] }} </p>
            </div>
            @endforeach

        </div>
    </div>

    <x-navigation />
</x-app-layout>
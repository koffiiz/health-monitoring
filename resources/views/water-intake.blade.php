<x-app-layout>
    @php    
     $headerTitle = "Water Intake";
    @endphp

    <x-app-header :headerTitle="$headerTitle" />

    <x-water-intake-css />

    <div class="water-intake--container">
        <div class="water-glass--container">
            <div class='container'>
                <div class='glass'></div>
                <div class='water'>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                  <div class='droplet'></div>
                </div>
            </div>

            <div class="water-intake--form">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('water-intake-update') }}" >
                    @csrf
                    <div class="step_input_fields step--one__height">
                        <input type="number" id="water-intake" name="water_intake" placeholder="Enter your water intake" required>
                        <span class="step-one-icon"><i class="fa-solid fa-glass-water-droplet"></i></span>
                        <button class="btn-pink">ML</button>
                    </div>
                    <div class="">
                        <button class="btn_submit next" value="Drink" id="drink-button">Drink !</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-navigation />

</x-app-layout>
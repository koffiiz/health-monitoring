<x-app-layout>
    @php    
     $headerTitle = "Sleep Tracker";
    @endphp

    <x-app-header :headerTitle="$headerTitle" />

    <x-sleep-tracker-css />

    <div class="container sleep-tracker">
        {{-- <div class="on-ground-lights">
          <div class="window-light">
            <div class="cat">
              <div class="head"></div>
            </div>
          </div>
          <div class="window-light"></div>
        </div> --}}
        <div class="table right">
          <div class="table-shadow">
            <div class="window-light"></div>
          </div>
        </div>
        <div class="bed">
          <div class="bed-shadow">
            <div class="window-light"></div>
            <div class="window-light"></div>
          </div>
          <div class="bed-head"></div>
          <div class="ground-cloth">
            <div class="window-light"></div>
            <div class="window-light"></div>
            <div class="under-pillow-shadows">
              <div class="head-shadow"></div>
              <div class="neck-shadow"></div>
            </div>
            <div class="pillow">
              <div class="window-light"></div>
              <div class="pillow-shadows">
                <div class="ear-shadow"></div>
                <div class="head-shadow"></div>
              </div>
            </div>
            <div class="boy">
              <div class="shoulder"></div>
              <div class="neck"></div>
              <div class="ears"></div>
              <div class="head">
                <div class="nose"></div>
                <div class="eyebrows">
                  <div class="eyebrow"></div>
                  <div class="eyebrow"></div>
                </div>
                <div class="eyes"></div>
                <div class="mouth"></div>
              </div>
              <div class="hair">
                <div class="part"></div>
                <div class="part keen"></div>
                <div class="part keen"></div>
                <div class="part keen"></div>
                <div class="part keen"></div>
                <div class="part keen"></div>
                <div class="part"></div>
                <div class="part"></div>
              </div>
            </div>
          </div>
          <div class="quilt">
            <div class="top">
              <div class="window-light"></div>
              <div class="window-light"></div>
              <div class="window-light"></div>
              <div class="window-light"></div>
            </div>
            <div class="bottom">
              <div class="window-light"></div>
              <div class="window-light"></div>
            </div>
          </div>
        </div>
        <div class="shoes">
          <div class="shoe"></div>
          <div class="shoe"></div>
        </div>
        <div class="table left">
          <div class="lamp">
            <div class="bulb"></div>
          </div>
          <div class="phone"></div>
        </div>
      </div>

      <div class="sleep-tracker--form">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form method="POST" action="{{ route('sleep-tracker-update') }}" >
            @csrf
            @if (isset($latestSleepTracker))
              @if ($latestSleepTracker->sleep_end == null)
                <input type="hidden" name="sleep_status" value="sleep_end"/>
                <div class="">
                  <button class="btn_submit next" value="Drink" id="drink-button">End Sleep</button>
                </div>
              @endif
            @else
              <input type="hidden" name="sleep_status" value="sleep_start"/>
              <div class="">
                <button class="btn_submit next" value="Drink" id="drink-button">Start Sleep</button>
              </div>
            @endif
           
        </form>
    </div>
    
    <x-navigation />

</x-app-layout>
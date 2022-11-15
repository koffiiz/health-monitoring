<x-app-layout>
    <div id="step-two">
        <form method="POST" action="{{ route('register-step-store') }}">
            @csrf
            <div class="registration--textfield--one register--textfield--two">
                <div class="step_one_row1">
                    <img src="{{ asset('/assets/images/steptwo.png')  }}" alt="" srcset="">
                    <h1>Let’s complete your profile</h1>
                    <p>It will help us to know more about you!</p>
                    <div class="step_input_fields step--two__gender">
                        <input type="text" id="step_two_gender" name="gender" placeholder="Choose Your Gender" required>
                        <span class="step-one-icon"><i class="fa-solid fa-user-group"></i></span>
                    </div>
                    <div class="step_input_fields step--two__bday">
                        <input type="date" id="step_two_bday"  name="birthday" placeholder="Date of Birth" required>
                        <span class="step-one-icon"><i class="fa-regular fa-calendar-days"></i></span>
                    </div>
                    <div class="step_input_fields step--one__weight">
                        <input type="number" id="step_two_weight"  name="weight" placeholder="Your Weight" required>
                        <span class="step-one-icon"><i class="fa-solid fa-weight-scale"></i></span>
                        <button class="btn-pink">KG</button>
                    </div>
                    <div class="step_input_fields step--one__height">
                        <input type="number" id="step_two_height"   name="height" placeholder="Your Height" required>
                        <span class="step-one-icon"><i class="far fa-line-height"></i></span>
                        <button class="btn-pink">CM</button>
                    </div>
                </div>
                <div class="step_one_row2">
                    <button class="btn_submit next" value="Finish" id="next2">Finish &nbsp;<i class="fa-solid fa-chevron-right"></i></button>
                </div>
                </div>
            </div>
        </form>
       
{{-- 
    <fieldset id="step-three">
        <div class="registration--textfield--one register--textfield--three">
            <div class="step_one_row1">
                <img src="/assets/stepthree.png" alt="" srcset="">
                <h1>Let’s complete your profile</h1>
                <p>It will help us to know more about you!</p>
            </div>
            <div class="step_one_row2">
                <button type="submit" class="btn_submit next" value="" id="">Register</i></button>
            </div>
            </div>
    </fieldset> --}}
</x-app-layout>

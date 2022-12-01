<x-app-layout>
    @php
        $headerTitle = "Update Profile";
    @endphp

    <x-app-header :headerTitle="$headerTitle" />

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div id="update-profile">
        <form method="POST" action="{{ route('update-profile') }}">
            @csrf
            <div class="registration--textfield--one register--textfield--two">
                <div class="step_one_row1">
                    <h1>Let’s Update your profile</h1>
                    <div class="step_input_fields step--one__firstname">
                        <input type="text" id="step_one_name" name="first_name" placeholder="Enter First Name.." value="{{$user->first_name}}" required>
                        <span class="step-one-icon"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="step_input_fields step--one__lastname">
                        <input type="text" id="step_one_lastname"  name="last_name" placeholder="Enter Last Name.." value="{{$user->last_name}}" required>
                        <span class="step-one-icon"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="step_input_fields step--one__email">
                        <input type="email" id="step_one_email"  name="email" placeholder="Enter Email Address.."  value="{{$user->email}}" readonly>
                        <span class="step-one-icon"><i class="fa-regular fa-envelope"></i></span>
                    </div>

                    <div class="step_input_fields step--two__gender">
                        <!-- <input type="text" id="step_two_gender" name="gender" placeholder="Choose Your Gender" required> -->
                        <label for="male">Male</label>
                        <input type="radio" id="male" name="gender" value="Male" 
                        @php
                            if($user->gender == "Male") {
                                echo "checked";
                            }
                        @endphp>
                        <label for="female">Female</label>
                        <input type="radio" id="female" name="gender" value="Female"
                        @php
                            if($user->gender == "Female") {
                                echo "checked";
                            }
                         @endphp
                        
                        >
                        <span class="step-one-icon"><i class="fa-solid fa-venus-mars"></i></span>
                    </div>
                    <div class="step_input_fields step--two__bday">
                        <input type="text" id="step_two_bday"  name="birthday" placeholder="Date of Birth" onfocus="(this.type='date')" value="{{ $user->birthday }}" required>
                        <span class="step-one-icon"><i class="fa-regular fa-calendar-days"></i></span>
                    </div>
                    <div class="step_input_fields step--one__weight">
                        <input type="number" id="step_two_weight"  name="weight" placeholder="Your Weight" value="{{ $user->weight }}" required>
                        <span class="step-one-icon"><i class="fa-solid fa-weight-scale"></i></span>
                        <button class="btn-pink">KG</button>
                    </div>
                    <div class="step_input_fields step--one__height">
                        <input type="number" id="step_two_height"   name="height" placeholder="Your Height" value="{{ $user->height }}" required>
                        <span class="step-one-icon"><i class="fa-solid fa-person"></i></span>
                        <button class="btn-pink">CM</button>
                    </div>
                </div>
                <div class="step_one_row2">
                    <button class="btn_submit next" value="Finish" id="next2">Finish &nbsp;<i class="fa-solid fa-chevron-right"></i></button>
                </div>
                </div>
            </div>
        </form>
       
        <x-navigation />

</x-app-layout>

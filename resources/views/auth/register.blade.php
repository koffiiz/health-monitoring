<x-guest-layout>
    <x-auth-card>
  
        <section>
            <div class="container">
                <div class="row">
                    <form id="multistep_form" action="/action_page.php">
                    <div class="register-step-one">
                        <fieldset id="step-one">
                        <div class="registration--textfield--one">
                            <div class="step_one_row1">
                        <h6>Hey there,</h6>
                        <h1>Create an Account</h1>
                                <div class="step_input_fields step--one__firstname">
                                    <input type="text" id="step_one_name" name="name" placeholder="Enter First Name.." required>
                                    <span class="step-one-icon"><i class="fa-regular fa-user"></i></span>
                                </div>
                                <div class="step_input_fields step--one__lastname">
                                    <input type="text" id="step_one_lastname"  name="lastname" placeholder="Enter Last Name.." required>
                                    <span class="step-one-icon"><i class="fa-regular fa-user"></i></span>
                                </div>
                                <div class="step_input_fields step--one__email">
                                    <input type="email" id="step_one_email"  name="email" placeholder="Enter Email Address.." required>
                                    <span class="step-one-icon"><i class="fa-regular fa-envelope"></i></span>
                                </div>
                                <div class="step_input_fields step--one__password">
                                    <span class="step-icon-eye"><i class="fa-regular fa-eye"></i></span>
                                    <input type="password" id="step_one_password"  name="password" placeholder="Enter Password.." required>
                                    <span class="step-one-icon"><i class="fa-solid fa-lock"></i></span>
                                </div>
                                <div class="confirm">
                                    <input type="checkbox" name="confirmed" value="Yes">
                                    <label for="confirmed"> By continuing you accept our <a href="#"> Privacy Policy </a> and <a href="#">Term of Use </a> </label><br>
                                </div>
                            </div>
                            <div class="step_one_row2">
                                <button class="btn_submit next" value="Next" id="next1">Register</button>
                                <p>Already have an account? <a href="http://"><span class="login">Login</span></a></p>
                            </div>
                            </div>
                        </fieldset>
    
                        <fieldset id="step-two">
                            <div class="registration--textfield--one register--textfield--two">
                                <div class="step_one_row1">
                                    <img src="{{ URL::asset('/assets/images/steptwo.png') }}" alt="" srcset="">
                                    <h1>Let’s complete your profile</h1>
                                    <p>It will help us to know more about you!</p>
                                    <div class="step_input_fields step--two__gender">
                                        <input type="text" id="step_two_gender" name="gender" placeholder="Choose Your Gender" required>
                                        <span class="step-one-icon"><i class="fa-solid fa-user-group"></i></span>
                                    </div>
                                    <div class="step_input_fields step--two__bday">
                                        <input type="text" id="step_two_bday"  name="bday" placeholder="Date of Birth" required>
                                        <span class="step-one-icon"><i class="fa-regular fa-calendar-days"></i></span>
                                    </div>
                                    <div class="step_input_fields step--one__weight">
                                        <input type="number" id="step_two_weight"  name="weight" placeholder="Your Weight" required>
                                        <span class="step-one-icon"><i class="fa-solid fa-weight-scale"></i></span>
                                        <button class="btn-pink">KG</button>
                                    </div>
                                    <div class="step_input_fields step--one__height">
                                        <input type="number" id="step_two_height"   name="height" placeholder="Your Height" required>
                                        <span class="step-one-icon"><i class="fa-solid fa-person"></i></i></span>
                                        <button class="btn-pink">CM</button>
                                    </div>
                                </div>
                                <div class="step_one_row2">
                                    <button class="btn_submit next" value="Next" id="next2">Next &nbsp;<i class="fa-solid fa-chevron-right"></i></button>
                                </div>
                                </div>
                            </fieldset>
                            <fieldset id="step-three">
                                <div class="registration--textfield--one register--textfield--three">
                                    <div class="step_one_row1">
                                        <img src="{{ URL::asset('/assets/images/stepthree.png') }}" alt="" srcset="">
                                        <h1>Let’s complete your profile</h1>
                                        <p>It will help us to know more about you!</p>
                                    </div>
                                    <div class="step_one_row2">
                                        <button type="submit" class="btn_submit next" value="" id="">Go to login</i></button>
                                    </div>
                                    </div>
                                </fieldset>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>
    
    </x-auth-card>
</x-guest-layout>

<x-guest-layout>
    <x-auth-card>
  
        <section>
            <div class="container">
                <div class="row">
                    <form id="multistep_form" method="POST" action="{{ route('register') }}">
                    @csrf
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

                                    <div class="step_input_fields step--one__password">
                                        <span class="step-icon-eye"><i class="fa-regular fa-eye"></i></span>
                                        <input type="password" id="password_confirmation"  name="password_confirmation" placeholder="Confirm Password" required>
                                        <span class="step-one-icon"><i class="fa-solid fa-lock"></i></span>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    <div class="confirm">
                                        <input type="checkbox" name="confirmed" value="Yes">
                                        <label for="confirmed"> By continuing you accept our <a href="#"> Privacy Policy </a> and <a href="#">Term of Use </a> </label><br>
                                    </div>
                                </div>
                                <div class="step_one_row2">
                                    <button type="submit" class="btn_submit next" value="Next">Register</button>
                                    <p>Already have an account? <a href="{{ route("login") }}"><span class="login">Login</span></a></p>
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

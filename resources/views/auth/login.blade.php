<x-guest-layout>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <section>
            <div class="container">
                <div class="row">
                <form id="multistep_form" class="login" action="/action_page.php">
                        <div class="register-step-one">
                            <fieldset id="step-one">
                            <div class="registration--textfield--one login-page">
                                <div class="step_one_row1">
                                    <h6>Hey there,</h6>
                                    <h1>Welcome Back</h1>
                                    <div class="step_input_fields step--one__firstname">
                                        <input type="text" id="step_one_name" name="name" placeholder="Enter First Name.." required>
                                        <span class="step-one-icon"><i class="fa-regular fa-user"></i></span>
                                    </div>
                                    <div class="step_input_fields step--one__password">
                                        <span class="step-icon-eye"><i class="fa-regular fa-eye"></i></span>
                                        <input type="password" id="step_one_password"  name="password" placeholder="Enter Password.." required>
                                        <span class="step-one-icon"><i class="fa-solid fa-lock"></i></span>
                                    </div>
                                    <div class="step_input_fields forgot__password__text">
                                        <a href="{{ route('password.request') }}"> <p>Forgot your password</p> </a>
                                    </div>
                                </div>
                                <div class="step_one_row2">
                                    <button class="btn_submit next" value="Next" id="next1"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;  Login</button>
                                    <p>Don’t have an account yet? <a href="{{ route('register') }}"><span class="login">Register</span></a></p>
                                </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </section>
    </x-auth-card>
</x-guest-layout>

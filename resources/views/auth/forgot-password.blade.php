<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <section>
            <div class="container">
                <div class="row">
                <form id="multistep_form" class="login" action="">
                <div class="register-step-one">
                    <fieldset id="step-one">
                    <div class="registration--textfield--one login-page">
                        <div class="step_one_row1">
                    <h1>Reset Your Password</h1>
                    <div class="step_input_fields step--one__email">
                        <input type="email" id="step_one_email"  name="email" placeholder="Enter Email Address.." required>
                        <span class="step-one-icon"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                    <div class="step_input_fields step--one__password">
                        <span class="step-icon-eye"><i class="fa-regular fa-eye"></i></span>
                        <input type="password" id="step_one_npassword"  name="npassword" placeholder="New Password" required>
                        <span class="step-one-icon"><i class="fa-solid fa-lock"></i></span>
                    </div>
                            <div class="step_input_fields step--one__password">
                                <span class="step-icon-eye"><i class="fa-regular fa-eye"></i></span>
                                <input type="password" id="step_one_bpassword"  name="cpassword" placeholder="Comfirm Your Password" required>
                                <span class="step-one-icon"><i class="fa-solid fa-lock"></i></span>
                            </div>
                        </div>
                        <div class="step_one_row2">
                            <button class="btn_submit next" value="Next" id="next1"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;  Login</button>
                            <p>Don’t have an account yet? <a href="http://"><span class="login">Comfirm</span></a></p>
                        </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </section>
    </x-auth-card>
</x-guest-layout>

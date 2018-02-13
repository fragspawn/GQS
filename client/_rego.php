<div class="ui modal" id="registermodal">
  <i class="close icon"></i>
  <div class="header">
    Login Form
  </div>
    <div class="description">
        <fieldset>
            <legend>Registration Form</legend>
            <div class="ui form large" id="rego_form">
                <form method="post" action="registration_process.php">
                    <div class="ui field fluid icon input">
                        <input type="text" name="fname" id="cust_fname" placeholder="First Name">
                        <i class="user icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="text" name="lname" id="cust_lname" placeholder="Last Name">
                        <i class="user icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="text" name="email" id="cust_email" placeholder="E-Mail Address">
                        <i class="mail icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="text" name="phone" id="cust_phone" placeholder="Phone Number">
                        <i class="phone icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="password" name="password" id="cust_pass" placeholder="Password">
                        <i class="lock icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="password" name="password2" id="cust_pass2" placeholder="Password Again">
                        <i class="lock icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="text" name="dob" id="cust_dob" placeholder="Date of Birth">
                        <i class="calendar icon"></i>
                    </div>
                    <div class="ui checkbox">
                        <input type="checkbox" name="terms" tabindex="0">
                        <label>I agree to the terms and conditions</label>
                    </div>
                    <div class="ui field fluid icon input">
                        <button type="button" class="ui red fluid cancel button">
                            Cancel
                            <i class="inverted remove icon right"></i>
                        </button>
                        <button type="submit" id="cust_reg_submt" class="ui fluid blue submit button">Register
                            <i class="inverted checkmark icon right"></i>
                        </button>
                    </div>
                    <div id="emailvalidity" class="ui error message"></div>
                </form>
            </div>
        </fieldset>
    </div>
</div>

<!-- Gone into the Database -->
<div class="ui modal" id="loginmodal">
  <i class="close icon"></i>
  <div class="header">
    Login Form 
  </div>
    <div class="description">
        <fieldset>
            <legend>Login Form</legend>
            <div class="ui form large" id="login_form">
                <form action="login_process.php" method="POST"> 
                    <div class="ui field fluid icon input">
                        <input type="text" name="email" id="cust_login_email" placeholder="E-Mail Address">
                        <i class="user icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <input type="password" name="password" id="cust_login_password" placeholder="Password">
                        <i class="lock icon"></i>
                    </div>
                    <div class="ui field fluid icon input">
                        <button type="button" class="ui red fluid deiny button">
                            Cancel
                            <i class="inverted remove icon right"></i>
                        </button>
                        <button type="submit" id="cust_login_submt" class="ui submit positive button fluid blue">
                            Login
                            <i class="inverted checkmark icon right"></i>
                        </button>
                    </div>
                    <div id="loginvalidity" class="ui error message"></div>
                </form>
            </div>
        </fieldset>
    </div>
</div>

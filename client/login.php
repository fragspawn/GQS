        <fieldset>
            <legend>Login Form</legend>
            <form method="POST" action="registration_process.php" class="ui large form">
                <div class="input">
                    <input type="text" name="email" id="cust_login_email" placeholder="E-Mail Address">
                </div>
                <div class="input">
                    <input type="password" name="password" id="cust_login_password" placeholder="Password">
                </div>
                <div class="input">
                    <button id="cust_login_submt" class="ui fluid blue submit button">Login</button>
                </div>
            </form>
        </fieldset>
        <div id="loginvalidity" class="ui error message">Err?</div>

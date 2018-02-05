        <fieldset>
            <legend>Registration Form</legend>
            <form method="post" action="registration_process.php" class="ui large form">
                <div class="input">
                    <input type="text" name="fname" id="cust_fname" placeholder="First Name">
                </div>
                <div class="input">
                    <input type="text" name="lname" id="cust_lname" placeholder="Last Name">
                </div>
                <div class="input">
                    <input type="text" name="email" id="cust_email" placeholder="E-Mail Address" onChange="checkEmailExists()">
                </div>
                <div class="input">
                    <input type="text" name="phone" id="cust_phone" placeholder="Phone Number">
                </div>
                <div class="input">
                    <input type="password" name="password" id="cust_pass" placeholder="Password">
                </div>
                <div class="input">
                    <button id="cust_reg_submt" class="ui fluid blue submit button">Register</button>
                </div>
            </form>
        </fieldset>
        <div id="emailvalidity" class="ui error message">Err?</div>

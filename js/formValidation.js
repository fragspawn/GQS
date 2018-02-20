window.onload = function() {
    // Set Defaults
    window.sessionStorage.setItem('emailexists', 'false');

    // onload Default to homepage
    document.getElementById('contentgroup').firstElementChild.style.display = 'block';

    // Global Modal Configuration 
    $('.modal').modal({
		closable: true
    });

    // Global Accordian Configuration 
    $('.ui.accordion').accordion();

    // Datepicker 
    $('#cust_dob').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        minDate: "-100Y", 
        maxDate: "+0D",
        yearRange: "-100:+0",
        changeYear: true
    });

    // Form Validation for Login Form 
    $('#login_form').form({
        on: 'blur',
        fields: {
            email: {
                identifier: 'email',
                rules: [{
                    type: 'email',
                    prompt: 'Please enter a valid email'
                },
                {
                    type: 'empty',
                    prompt: 'Please enter a value for Email'
                }]
            },
            password: {
                identifier: 'password',
                rules: [{
                    type: 'empty',
                    prompt: 'Please enter a value for Password'
                },
                {
                    type   : 'minLength[8]',
                    prompt : 'Your password must be at least {ruleValue} characters'
                }]
            }
        }
    });

    // Custom Validation for the Check if Email exists  
    // Documentaion describes synchronous nature of this but .ajax is asynchronous! - Fix not yet obvious 
    $.fn.form.settings.rules.hasEmail = function(value, donno) {
        checkEmailExists(); 
        if(window.sessionStorage.getItem('emailexists') == 'true') {
            return false; 
        } else {
            return true; 
        }
    };

    // Form Validation for Registration Form 
    $('#rego_form').form({
        on: 'blur',
        fields: {
            fname: {
                identifier: 'fname',
                rules: [{
                    type   : 'regExp[/^[A-Za-z -\']{2,32}$/]',
                    prompt: 'Please enter a valid First Name' 
                },
                {
                    type: 'empty',
                    prompt: 'Please enter a value for First Name'
                }]
            },
            lname: {
                identifier: 'lname',
                rules: [{
                    type   : 'regExp[/^[A-Za-z -\']{2,32}$/]',
                    prompt: 'Please enter a valid Last Name' 
                },
                {
                    type: 'empty',
                    prompt: 'Please enter a value for Last Name'
                }]
            },
            email: {
                identifier: 'email',
                rules: [{
                    type: 'email',
                    prompt: 'Please enter a valid Email'
                },
                {
                    type: 'hasEmail',
                    prompt: 'Email already exists'
                },
                {
                    type: 'empty',
                    prompt: 'Please enter a value'
                }]
            },
            phone: {
                identifier: 'phone',
                rules: [{
                    type   : 'minLength[8]',
                    prompt: 'Phone Must be at least 8 characters'
                },
                {
                    type   : 'regExp[/^[0-9 -\(\)]{8,32}$/]',
                    prompt: 'Please enter at valid phone number'
                },
                {
                    type: 'empty',
                    prompt: 'Please enter a value for Phone'
                }]
            },
            password: {
                identifier: 'password',
                rules: [{
                    type: 'empty',
                    prompt: 'Please enter a value for Password'
                },
                {
                    type   : 'minLength[8]',
                    prompt : 'Your password must be at least {ruleValue} characters'
                }]
            },
            password2: {
                identifier: 'password2',
                rules: [{
                    type: 'empty',
                    prompt: 'Please enter a value for Password'
                },
                {
                    type: 'match[password]',
                    prompt: 'Passwords Must Match'
                },
                {
                    type   : 'minLength[8]',
                    prompt : 'Your password must be at least {ruleValue} characters'
                }]
            },
            terms: {
                identifier: 'terms',
                rules: [{
                    type   : 'checked',
                    prompt : 'You must agree to the terms and conditions'
                }]
            }
        }
    });

} // End Window onload;

function checkEmailExists() { 
    var checkurl = "registration_check_email.php?email=" + cust_email.value; 
//    $("#emailvalidity").load(url);
    $.ajax({
        url: checkurl,
        method: 'get',
        datatype: 'json',
        success: function(res) {
            if(res.emailexists == true) {
                window.sessionStorage.setItem('emailexists', 'true');
            } else {
                window.sessionStorage.setItem('emailexists', 'false');
            }
        },
        error: function(err) {
            console.log(res); 
        }
    });
}

function doMenu(menuItem) {
    hideAll();
    document.getElementById(menuItem).style.display = 'block';

    // If there is a modal to show, then show it now
    modalID = menuItem + 'modal';
    if(document.getElementById(modalID) != null) {
        $('#' + modalID).modal('show');
    }
}

function hideAll() {
    classOfContent = document.getElementsByClassName('contentitem');
    for(i=0;i<classOfContent.length;i++) {
        classOfContent[i].style.display = 'none';
    }
}

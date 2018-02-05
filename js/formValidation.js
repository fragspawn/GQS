function checkEmailExists() { 
    var url = "registration_check_email.php?email=" + cust_email.value; 
    $("#emailvalidity").load(url);
}

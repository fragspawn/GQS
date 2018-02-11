window.onload = function() {
    document.getElementById('contentgroup').firstElementChild.style.display = 'block';
}

function checkEmailExists() { 
    var url = "registration_check_email.php?email=" + cust_email.value; 
    $("#emailvalidity").load(url);
}

function doMenu(menuItem) {
    hideAll();
    document.getElementById(menuItem).style.display = 'block';
}

function hideAll() {
    classOfContent = document.getElementsByClassName('contentitem');
    for(i=0;i<classOfContent.length;i++) {
        classOfContent[i].style.display = 'none';
    }
}

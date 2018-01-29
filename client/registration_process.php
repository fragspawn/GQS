<?
    $insert_sql = "INSERT "; 
// INSERT INTO  `GQS`.`users` ( `ID` , `fname` , `lname` , `email` , `phone`) VALUES ( NULL ,  'asdf',  'asdf',  'asdf',  'asdf');
    $select_sql = "SELECT email from users where email = '" . $_POST['email'] . "';";
    print_r($_POST);
?>

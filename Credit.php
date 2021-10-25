<?php
$firstNameErr = $lastNameErr = $addressErr = $zipErr = $socialSecurityErr = $phoneNumber = $credit = "";
$firstName = $lastName = $address = $zip = $socialSecurity = $phoneNumber = $credit = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $firstName = "First name is required";
    } else {
        $firstName = test_input($_POST["firstName"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastName"])) {
        $lastName = "Last name is required";
    } else {
        $lastName = test_input($_POST["lastName"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["address"])) {
        $address = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }
}
if (strlen ( $_POST["zip"]) != 5)
    {
        $zip = "Zip is required in the format #####";  
    } else {
        $zip = test_input($_POST["zip"]);
    }
if (strlen ($_POST["socialSecurity"]) != 9)
    {
        $socialSecurity = "Social security is required in the format #########";
    } else {
        $socialSecurity = test_input($_POST["socialSecurity"]);
    }
 if (strlen ($_POST["phone"]) != 10)
    {
        $phone = "Phone number is required in the format ##########";
    } else {
        $phone = test_input($_POST["phone"]);
    }
if (strlen ($_POST["credit"]) != 3)
    {
        $credit = "Credit is required in the format ###";
    } else {
        $credit = test_input($_POST["credit"]);
    }

mysql_connect();
mysql_select_db();

$insert = "Insert into Credit (firstName, lastName, address, zip, socialSecurity, phone, credit)
values('$_POST[firstName]', '$_POST[lastName]', '$_POST[address]', '$_POST[zip]', '$_POST[socialSecurity]', '$_POST[phone]', '$_POST[credit]')";
?>
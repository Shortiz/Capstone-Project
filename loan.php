<?php
$fnameErr = $lnameErr = $addressErr = $zipErr = $socialSecurityErr = $phoneErr = $creditErr = "";
$fname = $lname = $address = $zip = $socialSecurity = $phone = $credit = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $fname = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lname"])) {
        $lname = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
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

$insert = "insert into customer loan (fname, lname, address, zip, socialSecurity, phone, credit)
values('$_POST[fname]', '$_POST[lname]', '$_POST[address]', '$_POST[zip]', '$_POST[socialSecurity]', '$_POST[phone]', '$_POST[credit]')";
?>
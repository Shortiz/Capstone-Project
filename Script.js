/*box in rewquired hidden hideit unhide it add a class or remove a class or add a new label or remove  the label*/ 
function validateForm(){
    var myForm = document.forms["Loan"];
    var fname = myForm["fname"];
    var lname = myForm["lname"];
    var address = myForm["address"];
    var socialSecurity = myForm["socialSecurity"];
    var phone = myForm["phone"];
    var credit = myForm["credit"];
              
        var required1="<b> First Name: *Required</b>";
        var required2="<b>Last name: *Required</b>";
        var required3="<b> Address: *Required</b>";
        var required4="<b>Social Security number: *Required</b>";
        var required5="<b> Phone number: *Required</b>";
        var required6="<b>Credit Score: *Required</b>";

            var isValid = new Boolean(true);
                if (fname.value === ""){
                    var fnameLabel = document.getElementById("fnameLabel");
                    fnameLabel.style.color = "Red";
                    fnameLabel.innerHTML =  required1;
                    isValid = false;
                }
                if (lname.value === ""){
                    var lnameLabel = document.getElementById("lnameLabel");
                    lnameLabel.style.color = "Red";
                    lnameLabel.innerHTML =  required2;
                    isValid = false;
                }
                if(address.value === ""){
                    var addressLabel = document.getElementById("addressLabel");
                    addressLabel.style.color = "Red";
                    addressLabel.innerHTML = required3;
                    isValid = false;
                }
                if(socialSecurity.value === ""){
                    var socialLabel = document.getElementById("socialLabel");
                    socialLabel.style.color = "Red";
                    socialLabel.innerHTML =  required4;
                    isValid = false;
                }
                if(phone.value === "") {
                    var phoneNumber = document.getElementById("phoneNumber");
                    phoneNumber.style.color = "Red";
                    phoneNumber.style.borderinput="Red";
                    phoneNumber.innerHTML =  required5;
                    isValid = false;
                }
                if(credit.value === ""){
                    var creditLabel = document.getElementById("creditLabel");
                    creditLabel.style.color = "Red";
                    creditLabel.innerHTML = required6;
                    isValid = false;
                }
               return isValid;
           
}
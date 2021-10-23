/*const firstName = document.getElementById('firstName')
const lastName = document.getElementById('lastName')
const address = document.getElementById('address')
const zip = document.getElementById('zip')
const socialSecurity = document.getElementById('socialSecurity')
const phoneNumber = document.getElementById('phoneNumber')
const emailAddress = document.getElementById('emailAddress')
const form = document.getElementById('form')
const errorEle = document.getElementById('error')



form.addEventListener('submit', (err) => {
    let messages = []

    if (firstName.value === '' || firstName.value == null) {
        messages.push('First Name Required');
    }

    if (lastName.value === '' || firstName.value == null) {
        messages.push('Last Name required');
    }

    if (address.value === '' || address.value == null) {
        messages.push('Address Required');
    }

    if (zip.value === '' || zip.value == null) {
        messages.push('Enter zip code');
    }

    if (socialSecurity.value === '' || socialSecurity.value == null) {
        messages.push('Enter a social security number')
    }

    if (phoneNumber.value === '' || phoneNumber.value == null) {
        messages.push('Enter a phone number')
    }

    if (emailAddress.value === '' || emailAddress.value == null) {
        messages.push('Enter a email address')
    }
    
    if (messages.length > 0) {

        err.preventDefault()
        errorEle.innerText = messages.join(', ')
    }
    

} ) 
*/
function validateForm(){
    var myForm = document.forms["signUp"];
    var fname = myForm["fname"];
    var lname = myForm["lname"];
    var address = myForm["address"];
    var city = myForm["city"];
    var state = myForm["state"];
    var zip = myForm["zip"];
    var socialSecurity = myForm["socialSecurity"];
    var phone = myForm["phone"];
    var email = myForm["email"];
   
              
        var required1="<b> First Name: *Required</b>";
        var required2="<b>Last name: *Required</b>";
        var required3="<b> Address: *Required</b>";
        var required4="<b>City: *Required</b>";
        var required5="<b>State: *Required</b>";
        var required6="<b>Zip: *Required</b>";
        var required7="<b>Social Security number: *Required</b>";
        var required8="<b>Phone number: *Required</b>";
        var required9="<b>email: *Required</b>";
       

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
                if(city.value === ""){
                    var cityLabel = document.getElementById("cityLabel");
                    cityLabel.style.color = "Red";
                    cityLabel.innerHTML = required4;
                    isValid = false;
                }
                if(state.value === ""){
                    var stateLabel = document.getElementById("stateLabel");
                    stateLabel.style.color = "Red";
                    stateLabel.innerHTML = required5;
                    isValid = false;
                }
                if(zip.value === ""){
                    var zipLabel = document.getElementById("zipLabel");
                    zipLabel.style.color = "Red";
                    zipLabel.innerHTML = required6;
                    isValid = false;
                }
                
                if(socialSecurity.value === ""){
                    var socialLabel = document.getElementById("socialLabel");
                    socialLabel.style.color = "Red";
                    socialLabel.innerHTML =  required7;
                    isValid = false;
                }
                if(phone.value === "") {
                    var phoneNumber = document.getElementById("phoneNumber");
                    phoneNumber.style.color = "Red";
                    phoneNumber.style.borderinput="Red";
                    phoneNumber.innerHTML =  required8;
                    isValid = false;
                }
                if(email.value === ""){
                    var emailLabel = document.getElementById("emailLabel");
                    emailLabel.style.color = "Red";
                    emailLabel.innerHTML = required9;
                    isValid = false;
                }
                
               return isValid;
           
}
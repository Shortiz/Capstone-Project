const firstName = document.getElementById('firstName')
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

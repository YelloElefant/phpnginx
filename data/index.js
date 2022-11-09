//console.log('lol')

let firstName = document.getElementById('firstName')
let lastName = document.getElementById('lastName')
let email = document.getElementById('email')
let form = document.getElementById('form')


function validateMyForm()
{
  if(firstName.value === '' || lastName.value === '' || email.value === '')
  { 
    alert("validation failed false");
    returnToPreviousPage();
    return false;
  }

  alert("validations passed");
  return true;
}

function returnToPreviousPage() {
  window.history.back();
}
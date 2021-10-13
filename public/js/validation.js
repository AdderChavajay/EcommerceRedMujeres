const password = document.getElementById('password').value;
const password_confirmation = document.getElementById('password_confirmation').value;

//const password_confirmation_error = document.getElementById('password_confirmation_error');

//password_confirmation_error.style.color='red';

function sendForm(){
    //const msjError =[];
 
    if(password != password_confirmation){
      //  msjError.push('las contrasñas no son iguales o esta vacia');
        //return false;
        alert('las contrasñas no son iguales o esta vacia');
    }
   // password_confirmation_error.innerHTML = msjError.join(',');
    //password_confirmation_error.className="alert alert-danger";
        
    return false;
}
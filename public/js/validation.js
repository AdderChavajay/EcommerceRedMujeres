const password = document.getElementById('password');
const password_confirmation = document.getElementById('password_confirmation');

const password_confirmation_error = document.getElementById('password_confirmation_error');
const password_error = document.getElementById('password_error');

password_confirmation_error.style.color='red';
password_error.style.color='red';

function sendForm(){
    const msjError =[];
    if(password.value === null || password.value === '' ){
        msjError.push('contraseña vacia');
        password_error.innerHTML = msjError.join(',');
        password_error.className="alert alert-danger";
        return false;
    }

    if(password_confirmation.value === null || password_confirmation.value === '' ){
        msjError.push('contraseña vacia');
        password_confirmation_error.innerHTML = msjError.join(',');
        password_confirmation_error.className="alert alert-danger";
        return false;
    }
    if(password.value !== password_confirmation){
        msjError.push('las contrasñas no son iguales');
        password_confirmation_error.innerHTML = msjError.join(',');
        password_confirmation_error.className="alert alert-danger";
        return false;
    }
    
}
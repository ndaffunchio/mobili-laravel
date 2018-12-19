
let errorMsg = document.getElementsByClassName('alert-error');
var errorCount = {
    email:false,
    firstName:false,
    lastName:false,
    password:false,
    dni:false,
    phone:true,
    date:true
};

function alpha(data) { 
  let letters = /^[a-zA-Z]+$/;
  if (letters.test(data)) {
    return true;
  }
  return false;
}

function validateEmail(data) {  
  let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(regexEmail.test(data)) {
    return true;
  }
  return (false)  
}  

function validateDni(data) {  
    let regexDni = /^\d{7,9}(?:[-\s]\d{4})?$/;
    if(regexDni.test(data)) {
      return true;
    }
    return (false)  
  }  

  function validatePhone(data) {  
    let regexPhone = /^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/;
    if(regexPhone.test(data)) {
      return true;
    }
    return (false)  
  }

  function validateDate(data) {  
    let regexDate = /^\d{4}-\d{2}-\d{2}$/;
    if(regexDate.test(data)) {
      return true;
    }
    return (false)  
  }

  

function disableButton() {
  document.getElementById('submit').disabled = true;
}

function enableButton() {
  document.getElementById('submit').disabled = false;
}

function validateEmailField() {
    let field = document.getElementById('email');
    let status = field.value;
    if (status.length <= 0) {
        // errorMsg[0].innerHTML = 'El campo no puede estar vacío.';
        errorMsg[0].innerHTML = '<span class="warning-sign">El campo no puede estar vacío.</span>';
        field.classList.add('is-invalid');
        errorCount.email = false;
    } else if (!validateEmail(status)) {
        errorMsg[0].innerHTML = 'La dirección de e-mail ingresada no es válida.';
        field.classList.add('is-invalid');
        errorCount.email = false;
    } else {
        errorMsg[0].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.email = true;
    }
};

document.getElementById('email').addEventListener('focus', validateEmailField, false);
document.getElementById('email').addEventListener('blur', validateEmailField, false);
document.getElementById('email').addEventListener('keyup', validateEmailField, false);

//////////////////////////

function validateFirstNameField() {
    let field = document.getElementById('first_name');
    let status = field.value;
    if (status.length <= 2) {
        errorMsg[1].innerHTML = 'El nombre debe contener al menos 3 caracteres.';
        field.classList.add('is-invalid');
        errorCount.firstName = false;
    } else if (!alpha(status)) {
        errorMsg[1].innerHTML = 'El nombre debe contener solo letras.';
        field.classList.add('is-invalid');
        errorCount.firstName = false;
    } else {
        errorMsg[1].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.firstName = true;
    }
  };

  document.getElementById('first_name').addEventListener('focus', validateFirstNameField, false);
  document.getElementById('first_name').addEventListener('blur', validateFirstNameField, false);
  document.getElementById('first_name').addEventListener('keyup', validateFirstNameField, false);

//////////////////////////

function validateLastNameField() {
    let field = document.getElementById('last_name');
    let status = field.value;
    if (status.length <= 2) {
        errorMsg[2].innerHTML = 'El apellido debe contener al menos 3 caracteres.';
        field.classList.add('is-invalid');
        errorCount.lastName = false;
    } else if (!alpha(status)) {
        errorMsg[2].innerHTML = 'El apellido debe contener solo letras.';
        field.classList.add('is-invalid');
        errorCount.lastName = false;
    } else {
        errorMsg[2].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.lastName = true;
    }
  };

  document.getElementById('last_name').addEventListener('focus', validateLastNameField, false);
  document.getElementById('last_name').addEventListener('blur', validateLastNameField, false);
  document.getElementById('last_name').addEventListener('keyup', validateLastNameField, false);

//////////////////////////

function validatePasswordField() {
    let field = document.getElementById('password');
    let status = field.value;
    let confirm = document.getElementById('password-confirm').value;
    if (status.length < 6) {
        errorMsg[3].innerHTML = 'La contraseña debe tener al menos 6 caracteres';
        field.classList.add('is-invalid');
        errorCount.password = false;
    } else if(status != confirm) {
        errorMsg[3].innerHTML = 'Las contraseñas no coinciden';
        field.classList.add('is-invalid');
        errorCount.password = false;
    } else {
        errorMsg[3].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.password = true;
    }
};

document.getElementById('password').addEventListener('focus', validatePasswordField, false);
document.getElementById('password').addEventListener('blur', validatePasswordField, false);
document.getElementById('password').addEventListener('keyup', validatePasswordField, false);
document.getElementById('password-confirm').addEventListener('focus', validatePasswordField, false);
document.getElementById('password-confirm').addEventListener('blur', validatePasswordField, false);
document.getElementById('password-confirm').addEventListener('keyup', validatePasswordField, false);

//////////////////////////

function validateDniField() {
    let field = document.getElementById('dni');
    let status = field.value;
    if (status.length < 1) {
        errorMsg[4].innerHTML = 'El campo no puede estar vacío.';
        field.classList.add('is-invalid');
        errorCount.dni = false;
    } else if(!validateDni(status)) {
        errorMsg[4].innerHTML = 'Ingrese un DNI válido.';
        field.classList.add('is-invalid');
        errorCount.dni = false;
    } else {
        errorMsg[4].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.dni = true;
    }
};

document.getElementById('dni').addEventListener('focus', validateDniField, false);
document.getElementById('dni').addEventListener('blur', validateDniField, false);
document.getElementById('dni').addEventListener('keyup', validateDniField, false);

//////////////////////////

function validatePhoneField() {
    let field = document.getElementById('phone');
    let status = field.value;
    if(!validatePhone(status)&&status.length>0) {
        errorMsg[5].innerHTML = 'Ingrese un teléfono válido. (Ej:1199887766)';
        field.classList.add('is-invalid');
        errorCount.phone = false;
    } else {
        errorMsg[5].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.phone = true;
    }
};

document.getElementById('phone').addEventListener('focus', validatePhoneField, false);
document.getElementById('phone').addEventListener('blur', validatePhoneField, false);
document.getElementById('phone').addEventListener('keyup', validatePhoneField, false);

//////////////////////////////

function validateDateField() {
    let field = document.getElementById('birthday');
    let status = field.value;
    if(!validateDate(status)&&status.length>0) {
        errorMsg[6].innerHTML = 'El formato de fecha es inválido. (YYYY-MM-DD)';
        field.classList.add('is-invalid');
        errorCount.date = false;
    } else {
        errorMsg[6].innerHTML = '';
        field.classList.remove('is-invalid');
        errorCount.date = true;
    }
};

document.getElementById('birthday').addEventListener('focus', validateDateField, false);
document.getElementById('birthday').addEventListener('blur', validateDateField, false);
document.getElementById('birthday').addEventListener('keyup', validateDateField, false);

document.getElementById('submit').addEventListener('mouseover', function(){
    if (!errorCount.email || !errorCount.firstName || !errorCount.lastName || !errorCount.password || !errorCount.dni || !errorCount.phone || !errorCount.date ){
        disableButton();
        errorMsg[7].innerHTML = 'Debe completar todos los campos marcados con asterisco.';
    } else {
        enableButton();
        errorMsg[7].innerHTML = '';
    }
});

document.getElementById('submit').addEventListener('mouseout', function(){
    errorMsg[7].innerHTML = '';
});


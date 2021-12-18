$(document).ready(function () {
  

  $("#submitBtn").on("click", function (e) {
    e.preventDefault()
    var usernameField = $("#username").val();
    var passwordField = $("#password").val();
    size = checkInputs();
    
    if(size === true) {
      $.ajax({
        type: "POST",
        url: "Login.php",
        dataType: "json",
        data: {username:usernameField, password:passwordField},
        success : function(data){
            if (data.code == "200"){          
              $(".alert-succes").html(data.msg);
              $(".alert-succes").css("display","block");
            } else {
                $(".alert-nosucces").html(data.msg);
                $(".alert-nosucces").css("display","block");
            }
        }
      });
    }
   
 
  });
  });


 function checkInputs() {

  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  var status = true;
  
  
  if (usernameValue === '') {
  setErrorFor(username, 'Numele nu este completat!');
  status = false;
  }
  
  else {
  setSuccesFor (username);
  }

    
    var textLength = passwordValue.length;

    if (passwordValue === '') {
      setErrorFor(password, 'Introduceti campul!');
      status = false;
      } else if (textLength<=8) {
        setErrorFor(password, 'Minim 8 caractere!');
        status = false;
      }
      
      else {
      setSuccesFor (password);
      }

    return status;
  }


function setErrorFor (input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');

  small.innerText = message;

  formControl.className = 'form-control error';
}

function setSuccesFor (input, message) {

  const formControl = input.parentElement;

  formControl.className = 'form-control succes';

}

$(document).ready(function () {
    currTheme = localStorage.getItem("currentTheme");
    changeTheme(currTheme);

    $("#regBtn").click(() => {
        regFormValidation();
    });

    $("#loginBtn").click(() => {
        logFormValidation();
    });

    $("#contactForm").click(() => {
        contactFormValidation();
    });
});

function regFormValidation() {
    let form = $("form[name='regForm']");
    form.validate({
        wrapper: "div",
        rules: {
            unameReg: {
                required: true,
                minlength: 3,
                maxlength: 20
            },
            emailReg: {
                required: true,
                email: true
            },
            pwdReg: {
                required: true,
                minlength: 8,
                maxlength: 20
            },
            rpwdReg: {
                required: true,
                equalTo: "input[name='pwdReg']"
            }
        },
        submitHandler: () => {
            regRequest();
        }
    })
}

function loginRequest() {
    let uname = $("input[name='unameLog']").val();
    let pwd = $("input[name='pwdLog']").val();

    $.ajax({
        type: "POST",
        url: "http://localhost/Laboratorul-Tehnologii-Web/login.php",
        data: {username: uname, password: pwd},
        dataType: "json",
        success: (response) => {
            if(response.status == true) {
                $("#loginPage").html("<div class='container'><div class='serverData'>" + response.message + "</div></div>");
                $(location). attr('href', 'http://localhost/Laboratorul-Tehnologii-Web/login.php');
            }
            else {
                $("#loginPage").html("<div class='container'><div class='serverData'>" + response.message + "</div></div>");
            }
        },
        error: () => {
            alert("Something went wrong. :(");
        }
    })
}

//Login form validation
function logFormValidation() {
    let form = $("form[name='login'");
    form.validate({
        wrapper: "div",
        rules: {
            unameLog: {required: true},
            pwdLog: {required: true}
        },
        submitHandler: () => {
            loginRequest();
        }
    });
}
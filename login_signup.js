// document.addEventListener("DOMContentLoaded", () => {
//     const loginform = document.querySelector("#form");
//     const signupform = document.querySelector("#form_su");

//     document.querySelector("#linksignup").addEventListener("click", event => {
//         event.preventDefault();
//         loginform.classList.add("form_hidden");
//         signupform.classList.remove("form_hidden");
//     });

//     document.querySelector("#linklogin").addEventListener("click", event => {
//         event.preventDefault();
//         loginform.classList.remove("form_hidden");
//         signupform.classList.add("form_hidden");
//     });
// });

//email validation for login 
function emailvalidation(){
    var form = document.getElementById('form');
    var email = document.getElementById('email').value;
    var msg = document.getElementById('email_error_msg');
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email.match(pattern)){
        form.classList.add("valid");
        form.classList.remove("invalid");
        msg.innerHTML = "";
    }
    else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        msg.innerHTML = "Enter valid email address.";
    }

    if(email == ""){
        form.classList.remove("valid");
        form.classList.remove("invalid");
        msg.innerHTML = "";
    }
}

//Email validation for sign up
// function emailvalidationsu(){
//     var form = document.getElementById('form_su');
//     var email = document.getElementById('email_su').value;
//     var msg = document.getElementById('email_error_msg_su');
//     var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

//     if(email.match(pattern)){
//         form.classList.add("valid");
//         form.classList.remove("invalid");
//         msg.innerHTML = "";
//     }
//     else{
//         form.classList.remove("valid");
//         form.classList.add("invalid");
//         msg.innerHTML = "Enter valid email address.";
//     }
//     if(email == ""){
//         form.classList.remove("valid");
//         form.classList.remove("invalid");
//         msg.innerHTML = "";
//     }
// }

//showing passwrod when click on eye icon and vise-versa
var passeye = document.getElementById('passeye');
var password = document.getElementById('password');

// var passeyesu = document.getElementById('passeye_su');
// var passwordsu = document.getElementById('password_su');

passeye.addEventListener('click', function (event) {
    // toggle the type attribute
    var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});

// passeyesu.addEventListener('click', function (event) {
//     // toggle the type attribute
//     var type = passwordsu.getAttribute('type') === 'password' ? 'text' : 'password';
//     passwordsu.setAttribute('type', type);
//     // toggle the eye / eye slash icon
//     this.classList.toggle('bi-eye');
// });



//preventing form from auto submit
var form = document.getElementById('form')
form.addEventListener('submit',function(event){
    event.preventDefault();
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    console.log(email);
    console.log(password);
})

//preventing form from auto submit
// var formsu = document.getElementById('form_su')
// formsu.addEventListener('submit',function(event){
//     event.preventDefault();
//     var name = document.getElementById('name').value;
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;
//     console.log(name);
//     console.log(email);
//     console.log(password);
// })
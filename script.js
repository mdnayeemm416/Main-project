// For LOGIN//.....

var logIn = document.getElementById("login");
var Register = document.getElementById("register");
var btn = document.getElementById("btn");
var log = document.getElementById("log");
var reg = document.getElementById("reg");

function register() {
    logIn.style.left = "-400px";
    Register.style.left = "50px";
    btn.style.left = "110px";
    log.style.color = "#000";
    reg.style.color = "#fff";
  }
  
  function login() {
    logIn.style.left = "50px";
    Register.style.left = "450px";
    btn.style.left = "0px";
    log.style.color = "#fff";
    reg.style.color = "#000";
  }

  // CheckBox Function
function goFurther(){
    if (document.getElementById("chkAgree").checked == true) {
      document.getElementById('btnSubmit').style.display='block';
    }
    else{
      document.getElementById('btnSubmit').style.display='none';
    }
  }
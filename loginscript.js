/** @format */

// For LOGIN
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");
var a = document.getElementById("log");
var b = document.getElementById("reg");
var w = document.getElementById("other");

function register() {
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "110px";
  w.style.visibility = "hidden";
  b.style.color = "#fff";
  a.style.color = "#000";
}

function login() {
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0px";
  w.style.visibility = "visible";
  a.style.color = "#fff";
  b.style.color = "#000";
}

// CheckBox Function
function goFurther() {
  if (document.getElementById("chkAgree").checked == true) {
    document.getElementById("btnSubmit").style =
      "background: linear-gradient(to right, #4c6cec, #8a2be2);";
  } else {
    document.getElementById("btnSubmit").style = "background: lightgray;";
  }
}

function google() {
  window.location.assign(
    "https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue&csig=AF-SEnbZHbi77CbAiuHE%3A1585466693&flowName=GlifWebSignIn&flowEntry=AddSession",
    "_blank"
  );
}

function instagram() {
  window.location.assign(
    "https://www.instagram.com/accounts/login/?next=%2Fsingin%2F&source=desktop_nav",
    "_blank"
  );
}

function facebook() {
  window.location.assign(
    "https://www.facebook.com/login.php?login_attempt=1&display=popup",
    "_blank"
  );
}

function twitter() {
  window.location.assign(
    "https://twitter.com/i/flow/login?redirect_after_login=%2Flogin",
    "_blank"
  );
}
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);

  }
  function validate_login(){
    var x=document.getElementById("login_email").value;
    var y=document.getElementById("login_password").value;
    if(x.length===0)
    {
      document.getElementById("ue1").style.display="block";
    }
    if(y.length===0)
    {
      document.getElementById("ps1").style.display="block";
    }
  //  setTimeout("hide_msg()",3000);
  }
/*
  function hide_msg() {}
      document.getElementById("ue1").style.display="none";
  }*/

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);


}
function validate_signup(){
  var email=document.getElementById("signup_email").value;
  var user=document.getElementById("signup_user").value;
  var pass=document.getElementById("signup_pass").value;
  var con_pass=document.getElementById("signup_con_pass").value;
  var add=document.getElementById("signup_add").value;
  var pin=document.getElementById("signup_pin").value;
  var contact=document.getElementById("signup_contact").value;
  if(email.length===0)
  {
    document.getElementById("se1").style.display="block";
  }
  if(user.length===0)
  {
    document.getElementById("us1").style.display="block";
  }
  if(pass.length===0)
  {
    document.getElementById("pass1").style.display="block";
  }
  if(con_pass.length===0)
  {
    document.getElementById("emtconpass1").style.display="block";
  }
  if(con_pass!=pass)
  {
    document.getElementById("conpass1").style.display="block";
  }
  if(add.length===0)
  {
    document.getElementById("as1").style.display="block";
  }
  if(pin.length===0)
  {
    document.getElementById("pins1").style.display="block";
  }
  if(document.slist.selectedIndex=="")
  {
      document.getElementById("states1").style.display="block";
  }
  if((document.gender[0].checked==false)&&(document.gender[1].checked==false))
  {
    document.getElementById("genders1").style.display="block";
  }
  if(contact.length===0)
  {
    document.getElementById("contacts1").style.display="block";
  }
//  setTimeout("hide_msg()",3000);
document
}


function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";
document.querySelector('.cont_form_sign_up').style.opacity = "0";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);

  }

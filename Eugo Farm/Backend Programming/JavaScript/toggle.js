// ------ PASSWORD TOGGLE ----------
function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");

    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "block";        //the item that is hidden will be visible
        hide_eye.style.display = "none";       //the item that is visible will be hidden
    } else {
        x.type = "password";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    }

}

function password_show_hide2() {
    var y = document.getElementById("cpassword");
    var show_eye2 = document.getElementById("show_eye2");
    var hide_eye2 = document.getElementById("hide_eye2");
  
    //for confirmation password
    if (y.type === "password") {
        y.type = "text";
        show_eye2.style.display = "block";        //the item that is hidden will be visible
        hide_eye2.style.display = "none";       //the item that is visible will be hidden
    } else {
        y.type = "password";
        show_eye2.style.display = "none";
        hide_eye2.style.display = "block";
    }
}

// var state= false;
// function toggle(){
//     if(state){
// 	document.getElementById("password").setAttribute("type","password");
// 	document.getElementById("eye").style.color='#7a797e';
// 	state = false;
//      }
//      else{
// 	document.getElementById("password").setAttribute("type","text");
// 	document.getElementById("eye").style.color='#5887ef';
// 	state = true;
//      }
// }

// https://www.youtube.com/watch?v=D8oeGFDDAtc
// https://codingartistweb.com/2020/01/show-hide-password-toggle-with-javascript/ 
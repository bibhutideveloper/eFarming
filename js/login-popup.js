function showLogin(){
	document.getElementById("login-div").style.display = "block";
	document.getElementById("signup-div").style.display = "none";
}

function showSignup(){
	document.getElementById("login-div").style.display = "none";	
	document.getElementById("signup-div").style.display = "block";
}

//open login popup
function login(){
	document.getElementById("login-popup").style.display = "flex";
}

window.onclick = function (event) {
    var popup = document.getElementById("login-popup");
    if (event.target == popup) {
		closePopup();
    }
}

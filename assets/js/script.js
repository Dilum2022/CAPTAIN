function signup(){

    var fname = document.getElementById("fname");
    var email = document.getElementById("email");
    var gender = document.getElementById("gender");
    var password = document.getElementById("password");

    var form = new FormData();
    form.append("f", fname.value);
    form.append("e", email.value);
    form.append("g", gender.value);
    form.append("p", password.value);


    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;
                   alert(response);
        }
    }

    request.open("POST","./signupProcess.php", true);
    request.send(form);
 
}


function signin() {

    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberme = document.getElementById("rememberme");

    var form = new FormData();
    form.append("e", email.value);
    form.append("p", password.value);
    form.append("r", rememberme.checked);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 & request.readyState == 4) {
            var response = request.responseText;

            if (response == "success") {
                window.location = "home.php";
            } else {
                document.getElementById("msg1").innerHTML = response;
                document.getElementById("msgdiv1").className = "d-block";
            }

        }
    }

    request.open("POST", "signInProcess.php", true);
    request.send(form);

}
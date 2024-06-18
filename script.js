function signup() {
    var form = document.getElementById("signupForm");

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            if (request.status == 200) {
                alert(request.responseText);
            } else {
                alert('An error occurred during the request');
            }
        }
    }

    request.open("POST", "signupProcess.php", true);
    request.send(new FormData(form));
}


function signin() {
    var email = document.getElementById("inputEmail").value;
    var password = document.getElementById("inputPassword").value;
    var rememberMe = document.getElementById("rememberMe").checked;

    var form = new FormData();
    form.append("email", email);
    form.append("password", password);
    form.append("rememberMe", rememberMe);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            if (request.status == 200) {
                document.getElementById("modalBodyText").innerText = request.responseText;
                var responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
                responseModal.show();
            } else {
                alert('An error occurred during the request');
            }
        }
    };

    request.open("POST", "signinProcess.php", true);
    request.send(form);
}




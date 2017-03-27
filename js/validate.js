function validate() {
    var name, lastname, email, user, password, phone, expression;
    name = document.getElementById("name").value;
    lastname = document.getElementById("lastname").value;
    email = document.getElementById("email").value;
    user = document.getElementById("user").value;
    password = document.getElementById("password").value;
    phone = document.getElementById("phone").value;
    
    expression = /\w+@\w+\.+[a-z]/;
    
    if(name === "") {
        alert("The field Name is empty");
        return false;
    }
    else if (lastname === "") {
        alert("The field Last Name is empty");
        return false;
    }
    else if (email === "") {
        alert("The field Email is empty");
        return false;
    }
    else if (user === "") {
        alert("The field User is empty");
        return false;
    }
    else if (password === "") {
        alert("The field Password is empty");
        return false;
    }
    else if (phone === "") {
        alert("The field Phone is empty");
        return false;
    }
    else if (name.length>30) {
        alert("The field Name is too long");
        return false;
    }
    else if (lastname.length>80) {
        alert("The field Last Name is too long");
        return false;
    }
    else if (email.length>100) {
        alert("The field Email is too long");
        return false;
    }
    else if (password.length<6) {
        alert("Password must have 6 characters minimum");
        return false;
    }
    else if (!expression.test(email)) {
        alert("The Email is not valid");
        return false;
    }
    else if (user.length>20 || password.length>20) {
        alert("The User and Password must have 20 characters maximum");
        return false;
    }
    else if (phone.length>10 || phone.length<7) {
        alert("Please provide a valid Phone number");
        return false;
    }
    else if (isNaN(phone)) {
        alert("The Phone number field require only numbers");
        return false;
    }
}
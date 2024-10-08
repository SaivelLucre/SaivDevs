<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:2px solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

body{

background-color:var(--light-bg);
}


.btn,
.delete-btn,
.option-btn{
    display: inline-block;
    padding: 5px 115px;
    cursor: pointer;
    font-size: 15px;
    color: var(--white);
    border-radius: 5px;
    text-transform: capitalize;

}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
    background-color: var(--black);
}

.btn{
    background-color: var(--blue);
    margin-top: 5px;
}

.delete-btn{
    background-color: var(--red);
}

.option-btn{
    background-color: var(--orange);
}

.form-container{

min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
padding:20px;
}

.form-container form{
width: 400px;
border-radius: 10px;
border:var(--border);
padding:20px;
text-align: center;
background-color: var(--white);
}

.form-container form h3{
    font-size: 35px;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: var(--black)

}

.form-container form .box{
    width: 90%;
    border-radius: 5px;
    border: var(--border);
    padding:10px 10px;
    font-size: 15px;
    margin: 6px 0;
}

.form-container form p{
    margin-top: 10px;
    font-size: 15px;
    color: var(--black);
}

.form-container form a{
    color: var(--red);
}

.form-container form p a:hover{
    text-decoration: underline;
}
    </style>



    <script>
        function validateForm() {
            var username = document.forms["registerForm"]["name"].value;
            var email = document.forms["registerForm"]["email"].value;
            var password = document.forms["registerForm"]["password"].value;
            var confirmPassword = document.forms["registerForm"]["cpassword"].value;

            if (username == "") {
                alert("Username is empty");
                return false;
            }

            if (email == "") {
                alert("Email is empty");
                return false;
            }

            if (password == "") {
                alert("Password is empty");
                return false;
            }

            if (confirmPassword == "") {
                alert("Confirm Password is empty");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            window.location.href='{{ url('/login') }}'; 
            return false; 
        }
    </script>
</head>
<body>

    <div class="form-container">
        <form name="registerForm" action="" method="post" onsubmit="return validateForm()">
            <h3>Register now</h3> 
            <input type="text" name="name" placeholder="enter username" class="box">
            <input type="email" name="email" placeholder="enter email" class="box">
            <input type="password" name="password" placeholder="enter password" class="box">
            <input type="password" name="cpassword" placeholder="confirm password" class="box">
            <button type="submit" class="btn">Register</button>
            <p>Already have an account? <a href="{{ route('login') }}">Login now</a></p>
        </form>
    </div>

</body>
</html>
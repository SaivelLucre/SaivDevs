<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Your existing CSS styles */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: url('{{ asset('img.jpg') }}') no-repeat;
            background-size: cover;
            background-position: center;
            animation: animateBg 5s linear infinite;
        }

        @keyframes animateBg {
            100% {
                filter: hue-rotate(360deg);
            }
        }

        .login-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(17px);
        }

        h2 {
            font-size: 2em;
            color: white;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 310px;
            margin: 30px;
            border-bottom: 2px solid white;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            font-size: 1em;
            color: white;
            pointer-events: none;
            transition: .5s;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
        }

        .input-box input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: white;
            padding: 0 35px 0 4px;
        }

        .input-box .icon {
            position: absolute;
            right: 10px;
            color: white;
            font-size: 1.2em;
            line-height: 57px;
        }

        .remember-forgot {
            margin: -16px 0 15px;
            font-size: .9em;
            color: white;
            display: flex;
            justify-content: space-between;
        }

        .remember-forgot label input {
            margin-right: 3px;
        }

        .remember-forgot a {
            color: white;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            height: 40px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1em;
            color: black;
            font-weight: 500;
        }

        .register-link {
            font-size: .9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register-link p a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section>
        <div class="login-box">
            <form id="loginForm" onsubmit="return validateForm()">
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-envelope'></i>
                    </span>
                    <input type="email" id="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-lock'></i>
                    </span>
                    <input type="password" id="password" required minlength="6">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                    
                </div>
            </form>
        </div>
    </section>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Simple email pattern for validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            window.location.href='{{ url('/dashboard') }}'; 
            return false; 

           
        }
    </script>
</body>
</html>

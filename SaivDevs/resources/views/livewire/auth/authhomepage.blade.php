<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            overflow: hidden; 
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            filter: blur(5px); 
            z-index: -1; 
        }

        nav {
            background-color: white;
            box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        nav ul {
            width: 100%;
            list-style: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav li {
            height: 50px;
        }

        nav a {
            height: 100%;
            padding: 0 30px;
            text-decoration: none;
            display: flex;
            align-items: center;
            color: black;
        }

        nav a:hover {
            background-color: #f0f0f0;
        }

        nav li:first-child {
            margin-right: auto;
        }

        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: 150px;
            z-index: 999;
            background-color: rgba(171, 183, 184, 0.37);
            backdrop-filter: blur(10px);
            box-shadow: -10px 0 10px rgba(0,0,0,0.1);
            display: none;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .sidebar li {
            width: 100%;
        }

        .sidebar a {
            width: 100%;
        }

        section {
            min-height: 100vh;
            padding: 0rem 3% 5rem;
        }

        .home {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5rem;
        }

        .home .home-content h1 {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.1;
            word-spacing: 5px;
        }

        span {
            color: red;
        }

        .home-content h3 {
            font-size: 1rem;
            margin-bottom: 1rem;
            margin-top: 2rem;
            font-weight: bold;
        }

        .home-img {
            border-radius: 50%;
        }

        .home-img img {
            position: relative;
            width: 50vw;
            border-radius: 5%;
            cursor: pointer;
            transition: 0.2s linear;
        }

        p {
            color: black; 
            text-shadow: 
                -1px -1px 0 white, 
                1px -1px 0 white,  
                -1px 1px 0 white,  
                1px 1px 0 white;   
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ url('/profiling') }}">Pre-School Profiling & Assessment Monitoring System</a></li>
                <li><a href="{{ url('/homepage') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>

        <header>
            <section class="home">
                <div class="home-img">
                    <img src="{{ asset('img.jpg') }}" alt="">
                </div>
                <div class="home-content">
                    <h1>Pre-School Profiling &<span> Assessment</span> Monitoring System</h1>
                    <h3>Gogon Centro Virac, Catanduanes</h3>
                    <p>The purpose is to keep an eye on the child's behavior<br>
                        and assess how they are learning, behaving, speaking, and<br> 
                        maintaining the following phases of their educational<br> 
                        journey. When effectively implemented, it contributed to<br>
                        a high-quality early childhood education program that<br> 
                        supports all aspects of a child's development. Teacher can use<br>
                        this as action or process if their child is having difficulty<br>
                        in a particular area in order to promote their growth.</p>
                </div>
            </section>
        </header>
    </div> <!-- Single root element -->
</body>
</html>

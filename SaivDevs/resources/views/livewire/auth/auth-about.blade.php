<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body {
            background-color: #f1f1f1;
        }
        .about-us {
            padding: 100px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .image-section {
            flex: 1;
            text-align: center;
            opacity: 0;
            transform: translateY(50px);
            animation: slideIn 1s forwards;
        }
        .image-section img {
            max-width: 100%;
            height: auto;
        }
        .content-section {
            flex: 1;
            margin-left: 40px;
            transform: translateY(50px);
            animation: fadeIn 1s forwards;
            animation-delay: 0.5s;
        }
        .content-section h2 {
            font-size: 35px;
            margin-bottom: 20px;
        }
        .content-section p {
            font-size: 16px;
            line-height: 1.6;
        }
        .content-section .btn,
        .content-section .back-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 12px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 15px;
            text-align: center;
            transition: 0.4s ease;
        }
        .content-section .btn {
            background-color: blue;
            color: #fff;
        }
        .content-section .btn:hover {
            background-color: blue;
        }
        .content-section .back-btn {
            background-color: red; 
            color: #fff; 
        }
        .content-section .back-btn:hover {
            background-color: darkred; 
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<section class="about-us"> 
    <div class="container">
        <div class="image-section">
            <img src="{{ asset('image.jpg') }}" alt="">
        </div>
        <div class="content-section">
            <h2>About Us</h2>
            <p>
                Is a cutting-edge instrument made to raise the standard of early childhood education. 
                This system gives teachers the ability to customize their training to each child's 
                specific requirements by offering a thorough and consistent framework for evaluating 
                the growth of young learners. At the heart of this system lies a suite of assessments 
                that measure various developmental domains, including cognitive, social, emotional, 
                and physical. These assessments are carefully aligned with recognized early childhood 
                education frameworks, ensuring accurate and reliable results.
        
                <span class="more-content" id="more" style="display: none;">
                    This system's capacity to support individualized education is one of its main advantages. 
                    Educators can design tailored learning experiences that support the best possible growth 
                    and development by determining each student's unique learning preferences and developmental 
                    needs. This individualized approach creates a supportive and stimulating learning environment
                    in addition to improving academic results.
                    
                </span>
                <span id="dots">...</span>
            </p>
        
            <button class="btn" id="readMoreBtn" onclick="toggleReadMore()">Read More</button>
            <button class="back-btn" id="backBtn"onclick="window.location.href='{{ url('/homepage') }}'" style="display: inline;">Back</button>
        </div>
        
        <script>
            function toggleReadMore() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("readMoreBtn");
                var backBtn = document.getElementById("backBtn");
        
                if (moreText.style.display === "none" || moreText.style.display === "") {
                    moreText.style.display = "inline"; 
                    dots.style.display = "none"; 
                    btnText.innerHTML = "Read Less"; 
                    backBtn.style.display = "none"; 
                } else {
                    moreText.style.display = "none"; 
                    dots.style.display = "inline"; 
                    btnText.innerHTML = "Read More"; 
                    backBtn.style.display = "inline"; 
                }
            }
        </script>
    </div>
</section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .contact{
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .contact .content{
            max-width: 800px;
            text-align: center;
        }

        .contact .content h2{
            font-size: 36px;
            font-weight: 500;
            color: black;
        }  

        .contact .content p{
            font-weight: 300;
            color:black;
        }

        .container{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .container .contactInfo{
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .container .contactInfo .box{
            position: relative;
            padding: 20px 0;
            display: flex;
        }

        .container .contactInfo .box .icon{
            min-width: 30px;
            height: 60px;
            background: gray;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 20px;
            padding: 20px;
        }

        .container .contactInfo .box .text{
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: black;
            flex-direction: column;
            font-weight: 300;
        }

        .container .contactInfo .box .text h3{
            font-weight: 500;
            color: black;
        }

        .contactForm{
            width: 40%;
            padding: 40px;
            background: gray;
        }

        .contactForm h2{
            font-size: 30px;
            color: black;
            font-weight: 500;
        }

        .contactForm .inputBox{
            position: relative;
            width: 100%;
            margin-top: 5px;
        }

        .contactForm .inputBox input,
        .contactForm .inputBox textarea{
            width: 100%;
            padding: 7px 0;
            font-size: 15px;
            margin: 5px 0;
            border: none;
            border-bottom: 1px solid #333;
            outline: none;
            resize: none;
        }

        .contactForm .inputBox label {
            font-size: 15px;
            color: black;
            margin-bottom: 5px;
            display: block;
        }

        .contactForm .inputBox input[type="submit"],
        .content-section .back-btn{
            width: 100px;
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }

    </style>
</head>
<body>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Feel free to contact us with any inquiries, suggestions, or concerns. 
                We value your input and strive to provide excellent service.</p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class='bx bxs-map'></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>2800<br> Gogon Centro,<br>Virac Catanduanes</p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class='bx bxs-phone'></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>09637256644</p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class='bx bxs-envelope'></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>pinerolucresaivelezra@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                    <h2>Send Message</h2>

                    <div class="inputBox">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" required="required">
                    </div>

                    <div class="inputBox">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required="required">
                    </div>

                    <div class="inputBox">
                        <label for="message">Type your message here...</label>
                        <textarea id="message" name="message" required="required"></textarea>
                    </div>

                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>

                    <button class="back-btn" id="backBtn"onclick="window.location.href='{{ url('/homepage') }}'" style="display: inline;">Back</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>

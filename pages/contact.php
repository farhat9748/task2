<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Gym & Fitness</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: Arial, sans-serif;
    }

    body{
        background:#f4f4f4;
    }

    .contact-section{
        width:90%;
        max-width:1100px;
        margin:50px auto;
        background:#fff;
        border-radius:10px;
        box-shadow:0 5px 15px rgba(0,0,0,0.2);
        display:flex;
        flex-wrap:wrap;
        overflow:hidden;
    }

    .contact-info{
        flex:1;
        background:#111;
        color:#fff;
        padding:40px;
    }

    .contact-info h2{
        margin-bottom:20px;
        color:#ff6600;
    }

    .contact-info p{
        margin:15px 0;
        line-height:1.6;
    }

    .contact-form{
        flex:1;
        padding:40px;
    }

    .contact-form h2{
        margin-bottom:20px;
        color:#333;
    }

    .input-box{
        margin-bottom:20px;
    }

    .input-box input,
    .input-box textarea{
        width:100%;
        padding:12px;
        border:1px solid #ccc;
        border-radius:5px;
        outline:none;
        font-size:16px;
    }

    .input-box textarea{
        resize:none;
    }

    .btn{
        background:#ff6600;
        color:#fff;
        border:none;
        padding:12px 25px;
        font-size:16px;
        border-radius:5px;
        cursor:pointer;
    }

    .btn:hover{
        background:#e65c00;
    }

    @media(max-width:768px){
        .contact-section{
            flex-direction:column;
        }
    }
</style>
</head>
<body>

<section class="contact-section">

    <!-- Contact Information -->
    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Gym Name:</strong> Fitness Zone Gym</p>
        <p><strong>Address:</strong> 123 Fitness Street, Kolkata, India</p>
        <p><strong>Phone:</strong> +91 98765 43210</p>
        <p><strong>Email:</strong> info@fitnesszone.com</p>
        <p><strong>Working Hours:</strong><br>
           Monday - Saturday<br>
           6:00 AM - 10:00 PM
        </p>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <h2>Contact Us</h2>

        <form>
            <div class="input-box">
                <input type="text" placeholder="Enter Your Name" required>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Enter Your Email" required>
            </div>

            <div class="input-box">
                <input type="tel" placeholder="Enter Your Phone Number" required>
            </div>

            <div class="input-box">
                <textarea rows="5" placeholder="Write Your Message" required></textarea>
            </div>

            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>

</section>

</body>
</html>
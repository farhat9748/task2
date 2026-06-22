```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gym & Fitness</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
    scroll-behavior:smooth;
}

body{
    background:#111;
    color:#fff;
}

/* Navbar */
nav{
    background:rgba(0,0,0,0.9);
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 8%;
    position:fixed;
    width:100%;
    top:0;
    z-index:1000;
}

.logo{
    color:#ff6600;
    font-size:32px;
    font-weight:bold;
}

nav ul{
    list-style:none;
    display:flex;
}

nav ul li{
    margin-left:30px;
}

nav ul li a{
    color:white;
    text-decoration:none;
    font-size:17px;
    transition:0.3s;
}

nav ul li a:hover{
    color:#ff6600;
}

/* Hero Section */
.hero{
    height:100vh;
    background:
    linear-gradient(rgba(0,0,0,0.7),
    rgba(0,0,0,0.7)),
    url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=1600')
    center/cover no-repeat;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero-content h1{
    font-size:70px;
    margin-bottom:20px;
}

.hero-content p{
    font-size:22px;
    color:#ddd;
    margin-bottom:35px;
}

.btn{
    background:#ff6600;
    color:white;
    text-decoration:none;
    padding:15px 35px;
    border-radius:50px;
    font-size:18px;
    transition:0.3s;
}

.btn:hover{
    background:#ff4500;
}

/* Sections */
section{
    padding:90px 8%;
}

section h2{
    text-align:center;
    color:#ff6600;
    font-size:45px;
    margin-bottom:50px;
}

/* Cards */
.card-container,
.plans{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:30px;
}

.card{
    width:320px;
    background:#1c1c1c;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 20px rgba(0,0,0,0.5);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-10px);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card h3,
.card h2{
    padding:20px 20px 10px;
}

.card p{
    padding:0 20px 20px;
    color:#ccc;
}

.price{
    text-align:center;
    font-size:40px;
    color:#ff6600;
    margin-bottom:20px;
}

.price span{
    font-size:18px;
    color:#bbb;
}

.card ul{
    list-style:none;
    padding:20px;
}

.card ul li{
    padding:10px 0;
    border-bottom:1px solid #333;
}

.subscribe-btn{
    display:block;
    margin:20px;
    padding:12px;
    background:#ff6600;
    color:white;
    text-align:center;
    text-decoration:none;
    border-radius:8px;
}

.subscribe-btn:hover{
    background:#ff4500;
}

/* Footer */
footer{
    background:#000;
    text-align:center;
    padding:25px;
    color:#aaa;
}

@media(max-width:768px){

    nav{
        flex-direction:column;
    }

    nav ul{
        flex-wrap:wrap;
        justify-content:center;
        margin-top:15px;
    }

    nav ul li{
        margin:10px;
    }

    .hero-content h1{
        font-size:45px;
    }

    section h2{
        font-size:35px;
    }
}
</style>
</head>

<body>

<!-- Navbar -->
<nav>
    <div class="logo">GYM & FITNESS</div>

    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="program.php">Programs</a></li>
        <li><a href="trainer.php">Trainers</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Transform Your Body</h1>
        <p>Train Hard • Stay Fit • Live Healthy</p>
        <a href="join.php" class="btn">Join Now</a>
    </div>
</section>

<!-- Programs -->
<section>
    <h2>Our Programs</h2>

    <div class="card-container">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=600" alt="">
            <h3>Yoga</h3>
            <p>Improve flexibility, strength and mental wellness.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=600" alt="">
            <h3>Zumba</h3>
            <p>Enjoy energetic dance workouts and burn calories.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600" alt="">
            <h3>Weight Lifting</h3>
            <p>Build muscle and increase overall body strength.</p>
        </div>

    </div>
</section>

<!-- Trainers -->
<section>
    <h2>Expert Trainers</h2>

    <div class="card-container">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?w=600">
            <h3>Rahul Sharma</h3>
            <p>Certified Fitness Trainer with 8 years of experience.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=600">
            <h3>Priya Das</h3>
            <p>Professional Yoga and Aerobics Instructor.</p>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600">
            <h3>Amit Roy</h3>
            <p>Strength and Conditioning Specialist.</p>
        </div>

    </div>
</section>

<!-- Membership Plans -->
<section>
    <h2>Membership Plans</h2>

    <div class="plans">

        <div class="card">
            <h2>Basic Plan</h2>
            <div class="price">₹999 <span>/Month</span></div>

            <ul>
                <li>✔ Gym Equipment Access</li>
                <li>✔ Cardio Area</li>
                <li>✔ Locker Facility</li>
                <li>✔ Free Wi-Fi</li>
                <li>✔ 5 Days Access</li>
            </ul>

            <a href="payment.php" class="subscribe-btn">Subscribe</a>
        </div>

        <div class="card">
            <h2>Premium Plan</h2>
            <div class="price">₹1,999 <span>/Month</span></div>

            <ul>
                <li>✔ All Basic Features</li>
                <li>✔ Personal Trainer</li>
                <li>✔ Yoga & Zumba Classes</li>
                <li>✔ Nutrition Plan</li>
                <li>✔ 7 Days Access</li>
            </ul>

            <a href="payment.php" class="subscribe-btn">Subscribe</a>
        </div>

        <div class="card">
            <h2>VIP Pass</h2>
            <div class="price">₹3,499 <span>/Month</span></div>

            <ul>
                <li>✔ All Premium Features</li>
                <li>✔ Dedicated Trainer</li>
                <li>✔ Unlimited Sessions</li>
                <li>✔ Priority Support</li>
                <li>✔ Guest Pass</li>
            </ul>

            <a href="payment.php" class="subscribe-btn">Subscribe</a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer>
    <p>© 2026 Gym & Fitness | All Rights Reserved</p>
</footer>

</body>
</html>
```

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gym Programming & Training</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, sans-serif;
    }

    body{
        background:#f4f4f4;
    }

    .container{
        width:90%;
        margin:auto;
        padding:50px 0;
        text-align:center;
    }

    h1{
        color:#333;
        margin-bottom:15px;
    }

    p{
        color:#666;
        margin-bottom:40px;
    }

    .training-box{
        display:flex;
        justify-content:center;
        flex-wrap:wrap;
        gap:25px;
    }

    .card{
        width:300px;
        background:#fff;
        border-radius:10px;
        overflow:hidden;
        box-shadow:0 4px 8px rgba(0,0,0,0.2);
        transition:0.3s;
    }

    .card:hover{
        transform:translateY(-8px);
    }

    .card img{
        width:100%;
        height:200px;
        object-fit:cover;
    }

    .card-content{
        padding:20px;
    }

    .card h3{
        color:#222;
        margin-bottom:10px;
    }

    .card p{
        color:#666;
        font-size:14px;
        line-height:1.6;
    }

    .btn{
        display:inline-block;
        margin-top:15px;
        padding:10px 20px;
        background:#ff5722;
        color:white;
        text-decoration:none;
        border-radius:5px;
    }

    .btn:hover{
        background:#e64a19;
    }
</style>
</head>
<body>

<section class="container">
    <h1>Programming & Training</h1>
    <p>
        We offer professional fitness programming and training sessions to help
        members achieve strength, endurance, and a healthy lifestyle.
    </p>

    <div class="training-box">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48" alt="Weight Training">
            <div class="card-content">
                <h3>Weight Training</h3>
                <p>
                    Build muscle strength and improve body fitness with guided
                    weightlifting programs and expert trainers.
                </p>
                <a href="#" class="btn">Join Now</a>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438" alt="Cardio Training">
            <div class="card-content">
                <h3>Cardio Training</h3>
                <p>
                    Increase stamina and burn calories through treadmill,
                    cycling, and high-intensity cardio sessions.
                </p>
                <a href="#" class="btn">Join Now</a>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a" alt="Yoga Training">
            <div class="card-content">
                <h3>Yoga & Flexibility</h3>
                <p>
                    Improve flexibility, balance, and mental wellness through
                    yoga and stretching programs.
                </p>
                <a href="#" class="btn">Join Now</a>
            </div>
        </div>

    </div>
</section>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Trainers - Gym & Fitness</title>

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

    .trainer-section{
        padding:60px 10%;
        text-align:center;
    }

    .trainer-section h1{
        color:#222;
        margin-bottom:15px;
    }

    .trainer-section p{
        color:#555;
        margin-bottom:40px;
    }

    .trainer-container{
        display:flex;
        justify-content:center;
        flex-wrap:wrap;
        gap:30px;
    }

    .trainer-card{
        background:#fff;
        width:300px;
        border-radius:15px;
        overflow:hidden;
        box-shadow:0 5px 15px rgba(0,0,0,0.2);
        transition:0.3s;
    }

    .trainer-card:hover{
        transform:translateY(-10px);
    }

    .trainer-card img{
        width:100%;
        height:300px;
        object-fit:cover;
    }

    .trainer-info{
        padding:20px;
    }

    .trainer-info h2{
        color:#222;
        margin-bottom:10px;
    }

    .trainer-info h4{
        color:#ff5722;
        margin-bottom:15px;
    }

    .trainer-info p{
        color:#666;
        font-size:15px;
        line-height:1.6;
    }
</style>
</head>
<body>

<section class="trainer-section">
    <h1>Meet Our Expert Trainers</h1>
    <p>Our certified fitness trainers help you achieve your health and fitness goals.</p>

    <div class="trainer-container">

        <div class="trainer-card">
            <img src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?auto=format&fit=crop&w=600&q=80" alt="Trainer">
            <div class="trainer-info">
                <h2>Rahul Sharma</h2>
                <h4>Strength & Weight Training Coach</h4>
                <p>
                    8 years of experience in strength training, bodybuilding,
                    and muscle-building programs for beginners and professionals.
                </p>
            </div>
        </div>

        <div class="trainer-card">
            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=600&q=80" alt="Trainer">
            <div class="trainer-info">
                <h2>Priya Singh</h2>
                <h4>Yoga & Zumba Instructor</h4>
                <p>
                    Certified yoga and Zumba trainer specializing in flexibility,
                    weight loss, and stress management programs.
                </p>
            </div>
        </div>

        <div class="trainer-card">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=600&q=80" alt="Trainer">
            <div class="trainer-info">
                <h2>Amit Verma</h2>
                <h4>Personal Fitness Trainer</h4>
                <p>
                    Expert in cardio workouts, fat loss training, and personalized
                    fitness plans to help members stay fit and healthy.
                </p>
            </div>
        </div>

    </div>
</section>

</body>
</html>
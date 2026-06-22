<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gym Exercises</title>

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

    .exercise-section{
        padding:60px 8%;
        text-align:center;
    }

    .exercise-section h1{
        font-size:40px;
        margin-bottom:15px;
        color:#222;
    }

    .exercise-section p{
        color:#666;
        margin-bottom:40px;
    }

    .exercise-container{
        display:flex;
        justify-content:center;
        flex-wrap:wrap;
        gap:30px;
    }

    .exercise-card{
        background:#fff;
        width:260px;
        border-radius:15px;
        overflow:hidden;
        box-shadow:0 5px 15px rgba(0,0,0,0.15);
        transition:0.3s;
    }

    .exercise-card:hover{
        transform:translateY(-10px);
    }

    .exercise-card img{
        width:100%;
        height:180px;
        object-fit:cover;
    }

    .exercise-card .content{
        padding:20px;
    }

    .exercise-card h3{
        margin-bottom:10px;
        color:#333;
    }

    .exercise-card p{
        font-size:14px;
        color:#666;
        line-height:1.6;
    }
</style>
</head>
<body>

<section class="exercise-section">
    <h1>Our Fitness Programs</h1>
    <p>Stay fit and healthy with our professional training programs.</p>

    <div class="exercise-container">

        <!-- Yoga -->
        <div class="exercise-card">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=600" alt="Yoga">
            <div class="content">
                <h3>Yoga</h3>
                <p>
                    Improve flexibility, reduce stress, and increase mental focus
                    with our guided yoga sessions suitable for all age groups.
                </p>
            </div>
        </div>

        <!-- Zumba -->
        <div class="exercise-card">
            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=600" alt="Zumba">
            <div class="content">
                <h3>Zumba</h3>
                <p>
                    Enjoy energetic dance workouts that combine fitness and fun,
                    helping you burn calories and stay active.
                </p>
            </div>
        </div>

        <!-- Aerobics -->
        <div class="exercise-card">
            <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=600" alt="Aerobics">
            <div class="content">
                <h3>Aerobics</h3>
                <p>
                    Boost cardiovascular health and improve endurance through
                    high-energy aerobic exercise sessions.
                </p>
            </div>
        </div>

        <!-- Weight Lifting -->
        <div class="exercise-card">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600" alt="Weight Lifting">
            <div class="content">
                <h3>Weight Lifting</h3>
                <p>
                    Build strength, increase muscle mass, and improve overall
                    fitness with our modern weight training programs.
                </p>
            </div>
        </div>

    </div>
</section>

</body>
</html>
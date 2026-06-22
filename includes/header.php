<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym & Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .gym-navbar {
            background: #111 !important;
            padding: 12px 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.3);
        }
        .gym-navbar .navbar-brand {
            color: #ff6600 !important;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 1px;
        }
        .gym-navbar .navbar-brand:hover {
            color: #ff8533 !important;
        }
        .gym-navbar .nav-link {
            color: #ccc !important;
            font-size: 15px;
            font-weight: 500;
            margin: 0 5px;
            transition: color 0.3s ease;
        }
        .gym-navbar .nav-link:hover,
        .gym-navbar .nav-link.active {
            color: #ff6600 !important;
        }
        .gym-navbar .btn-login {
            background: transparent;
            border: 2px solid #ff6600;
            color: #ff6600;
            padding: 6px 20px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .gym-navbar .btn-login:hover {
            background: #ff6600;
            color: #fff;
        }
        .gym-navbar .btn-register {
            background: #ff6600;
            border: 2px solid #ff6600;
            color: #fff;
            padding: 6px 20px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .gym-navbar .btn-register:hover {
            background: #ff8533;
            border-color: #ff8533;
        }
        .gym-navbar .btn-logout {
            background: transparent;
            border: 2px solid #dc3545;
            color: #dc3545;
            padding: 6px 20px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .gym-navbar .btn-logout:hover {
            background: #dc3545;
            color: #fff;
        }
        .gym-navbar .user-greeting {
            color: #ff6600;
            font-weight: 600;
            margin-right: 15px;
            font-size: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg gym-navbar">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="index.php">
        <i class="fas fa-dumbbell"></i> GYM & FITNESS
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="program.php">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainer.php">Trainers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '<span class="user-greeting"><i class="fas fa-user-circle"></i> ' . htmlspecialchars($_SESSION['fullname']) . '</span>';
            echo '<a href="logout.php" class="btn btn-sm btn-logout">Logout</a>';
        } else {
            echo '<a href="login.php" class="btn btn-sm btn-login me-2">Login</a>';
            echo '<a href="register.php" class="btn btn-sm btn-register">Register</a>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>

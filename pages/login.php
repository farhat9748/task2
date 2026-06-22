```php
<?php
session_start();
include __DIR__ . '/../includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $message = "Please enter Email and Password.";
    } else {

        $stmt = $conn->prepare(
            "SELECT id, username, email, password, role
             FROM users
             WHERE email = ?"
        );

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {

            $user = $result->fetch_assoc();

            // Verify hashed password
            if (password_verify($password, $user['password'])) {

                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];

                header("Location: index.php");
                exit();

            } else {
                $message = "Incorrect Password!";
            }

        } else {
            $message = "Email not found!";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym Login</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-dark">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-body p-4">

                    <h2 class="text-center mb-4">
                        Gym Login
                    </h2>

                    <?php if ($message != "") { ?>
                        <div class="alert alert-danger">
                            <?php echo $message; ?>
                        </div>
                    <?php } ?>

                    <form method="POST">

                        <div class="mb-3">
                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter Email"
                                required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Enter Password"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Login
                        </button>

                    </form>

                    <div class="text-center mt-3">
                        Don't have an account?
                        <a href="register.php">
                            Register
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
```

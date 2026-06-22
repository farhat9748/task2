```php
<?php
session_start();
include __DIR__ . '/../includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validation
    if (
        empty($username) ||
        empty($email) ||
        empty($phone) ||
        empty($password) ||
        empty($confirm_password)
    ) {
        $message = "All fields are required.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    }
    elseif (strlen($password) < 6) {
        $message = "Password must be at least 6 characters.";
    }
    elseif ($password !== $confirm_password) {
        $message = "Passwords do not match.";
    }
    else {

        // Check if username or email already exists
        $check = $conn->prepare(
            "SELECT id FROM users
             WHERE username = ? OR email = ?"
        );

        $check->bind_param(
            "ss",
            $username,
            $email
        );

        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {

            $message =
                "Username or Email already exists.";

        } else {

            $hashed_password =
                password_hash(
                    $password,
                    PASSWORD_DEFAULT
                );

            $role = "user";

            // Insert new user
            $stmt = $conn->prepare(
                "INSERT INTO users
                (
                    username,
                    email,
                    phone,
                    password,
                    role
                )
                VALUES
                (
                    ?, ?, ?, ?, ?
                )"
            );

            $stmt->bind_param(
                "sssss",
                $username,
                $email,
                $phone,
                $hashed_password,
                $role
            );

            if ($stmt->execute()) {
                $message =
                    "Registration Successful!";
            } else {
                $message =
                    "Registration Failed: "
                    . $stmt->error;
            }

            $stmt->close();
        }

        $check->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym Registration</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-dark">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-body p-4">

                    <h2 class="text-center mb-4">
                        Gym Registration
                    </h2>

                    <?php if ($message != "") { ?>
                        <div class="alert alert-info">
                            <?php echo $message; ?>
                        </div>
                    <?php } ?>

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">
                                Username
                            </label>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Phone
                            </label>

                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Confirm Password
                            </label>

                            <input
                                type="password"
                                name="confirm_password"
                                class="form-control"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Register
                        </button>

                    </form>

                    <div class="text-center mt-3">
                        Already have an account?
                        <a href="login.php">
                            Login
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

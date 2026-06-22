<!DOCTYPE html>
<html>
<head>
    <title>Gym Join Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Join Our Gym</h2>

    <form method="POST">

        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone Number</label>
        <input type="text" name="phone" required>

        <label>Joining Date</label>
        <input type="date" name="join_date" required>

        <label>Preferred Time</label>
        <input type="time" name="join_time" required>

        <label>Days of Training</label>
        <select name="days" required>
            <option value="">Select Days</option>
            <option>Monday - Friday</option>
            <option>Monday - Saturday</option>
            <option>Tuesday - Sunday</option>
            <option>All 7 Days</option>
        </select>

        <input type="submit" name="submit" value="Join Now" class="btn">

    </form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['join_date'];
    $time = $_POST['join_time'];
    $days = $_POST['days'];

    echo "<h3>Membership Details</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Joining Date: " . $date . "<br>";
    echo "Preferred Time: " . $time . "<br>";
    echo "Training Days: " . $days;
}
?>

</div>

</body>
</html>
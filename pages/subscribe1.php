<?php
$plan = $_GET['plan'] ?? 'Basic Plan';
$amount = $_GET['amount'] ?? '999';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym Membership Subscription</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .container{
            width:420px;
            background:#fff;
            padding:30px;
            border-radius:12px;
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        .plan{
            background:#f8f8f8;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        }

        .plan p{
            margin:8px 0;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:12px;
            background:#28a745;
            color:#fff;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Subscribe Membership</h2>

    <div class="plan">
        <p><strong>Plan:</strong> <?php echo htmlspecialchars($plan); ?></p>
        <p><strong>Amount:</strong> ₹<?php echo htmlspecialchars($amount); ?></p>
    </div>

    <form action="payment.php" method="POST">
        <input type="hidden" name="plan"
               value="<?php echo htmlspecialchars($plan); ?>">

        <input type="hidden" name="amount"
               value="<?php echo htmlspecialchars($amount); ?>">

        <input type="text"
               name="name"
               placeholder="Enter Full Name"
               required>

        <input type="email"
               name="email"
               placeholder="Enter Email Address"
               required>

        <button type="submit">
            Proceed to Payment
        </button>
    </form>
</div>

</body>
</html>
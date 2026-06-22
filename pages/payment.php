```php
<?php
include '../includes/db.php';

$plan = $_GET['plan'] ?? 'Basic Plan';
$amount = $_GET['amount'] ?? '999';
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $method = $_POST['payment_method'];
    $payment_id = $_POST['payment_id'] ?? NULL;
    $payment_status = $_POST['payment_status'] ?? 'Pending';

    $stmt = $conn->prepare(
        "INSERT INTO payments
        (name, email, phone, plan, amount,
        payment_method, payment_id, payment_status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssssdsss",
        $name,
        $email,
        $phone,
        $plan,
        $amount,
        $method,
        $payment_id,
        $payment_status
    );

    if ($stmt->execute()) {

        if ($method == "Cash on Pay") {
            $message = "Membership booked successfully! Please pay ₹$amount at the gym reception.";
        } else {
            $message = "Payment successful! Payment ID: " . $payment_id;
        }

    } else {
        $message = "Something went wrong!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gym Payment</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(rgba(0,0,0,0.7),
    rgba(0,0,0,0.7)),
    url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=1600')
    center/cover no-repeat;
}

.container{
    width:450px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

h2{
    text-align:center;
    color:#222;
    margin-bottom:25px;
}

.plan-box{
    background:#f7f7f7;
    padding:20px;
    border-radius:12px;
    text-align:center;
    margin-bottom:25px;
}

.plan-box h3{
    color:#ff6600;
    margin-bottom:10px;
}

.amount{
    font-size:40px;
    font-weight:bold;
    color:#28a745;
}

input,
select{
    width:100%;
    padding:14px;
    margin-bottom:18px;
    border:1px solid #ddd;
    border-radius:10px;
    font-size:16px;
}

button{
    width:100%;
    padding:15px;
    background:#ff6600;
    color:#fff;
    border:none;
    border-radius:10px;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:#e65c00;
}

.success{
    margin-top:20px;
    padding:15px;
    background:#d4edda;
    color:#155724;
    border-radius:10px;
    text-align:center;
}

.back-btn{
    display:block;
    text-align:center;
    margin-top:20px;
    text-decoration:none;
    color:#ff6600;
    font-weight:bold;
}

</style>
</head>
<body>

<div class="container">

    <h2>Gym Membership Payment</h2>

    <div class="plan-box">
        <h3><?php echo htmlspecialchars($plan); ?></h3>
        <div class="amount">
            ₹<?php echo htmlspecialchars($amount); ?>
        </div>
    </div>

    <form method="POST" id="paymentForm">

        <input
            type="text"
            name="name"
            placeholder="Enter Full Name"
            required>

        <input
            type="email"
            name="email"
            placeholder="Enter Email Address"
            required>

        <input
            type="text"
            name="phone"
            placeholder="Enter Phone Number"
            maxlength="10"
            required>

        <select name="payment_method" id="payment_method" required>
            <option value="">Select Payment Method</option>
            <option value="UPI">UPI</option>
            <option value="Debit Card">Debit Card</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Net Banking">Net Banking</option>
            <option value="Cash on Pay">Cash on Pay</option>
        </select>

        <input type="hidden" name="payment_id" id="payment_id">
        <input type="hidden" name="payment_status" id="payment_status">

        <button type="button" id="payBtn">
            Pay ₹<?php echo htmlspecialchars($amount); ?>
        </button>

    </form>

    <?php if ($message != "") { ?>
        <div class="success">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <a href="index.php" class="back-btn">
        ← Back to Home
    </a>

</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>

document.getElementById("payBtn").onclick = function () {

    let method =
    document.getElementById("payment_method").value;

    if(method === ""){
        alert("Please select a payment method.");
        return;
    }

    // Cash on Pay
    if(method === "Cash on Pay"){
        document.getElementById("payment_status").value =
        "Pending";

        document.getElementById("paymentForm").submit();
        return;
    }

    // Razorpay
    var options = {
        key: "rzp_test_T4ZlHhGRz7rro7",
        amount: <?php echo $amount * 100; ?>,
        currency: "INR",
        name: "Gym & Fitness",
        description:
        "<?php echo $plan; ?> Membership",

        prefill: {
            name:
            document.getElementsByName("name")[0].value,

            email:
            document.getElementsByName("email")[0].value,

            contact:
            document.getElementsByName("phone")[0].value
        },

        theme: {
            color: "#ff6600"
        },

        handler: function (response) {

            document.getElementById("payment_id").value =
            response.razorpay_payment_id;

            document.getElementById("payment_status").value =
            "Success";

            document.getElementById("paymentForm").submit();
        }
    };

    var rzp = new Razorpay(options);
    rzp.open();
};

</script>

</body>
</html>
```

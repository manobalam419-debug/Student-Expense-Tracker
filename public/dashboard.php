
<?php
session_start();

if (empty($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Expense Tracker Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">Student Expense Tracker</div>
    <a href="logout.php" class="nav-login">Logout</a>
</nav>

<div class="dashboard-container">
    <h1>Welcome to Your Dashboard!</h1>
    <p>You are successfully logged in.</p>

    <h2>Student Expense Tracker</h2>
    <p>Manage your income and expenses easily.</p>

    <a href="add_transaction.php" class="primary-btn">
        Add Transaction
    </a>

    <a href="report.php" class="primary-btn">
        View Report
    </a>
</div>

</body>
</html>

<?php
session_start();
// Uncomment the lines below if you want to enforce login (recommended)
// if(!isset($_SESSION['username'])){
//     header("Location: index_login.html");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="dashboard-page">

    <div class="dashboard-container">
        <!-- Header -->
        <header class="dashboard-header">
            <h2>Dashboard</h2>
            <div style="display: flex; align-items: center; gap: 20px;">
                <span>Welcome, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!</span>
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        </header>

        <!-- Objects / Cards -->
        <div class="dashboard-grid">
            
            <div class="card">
                <i class='bx bxs-user-account'></i>
                <h3>Total Users</h3>
                <div class="value">1,250</div>
            </div>

            <div class="card">
                <i class='bx bxs-cart-alt'></i>
                <h3>New Orders</h3>
                <div class="value">345</div>
            </div>

            <div class="card">
                <i class='bx bxs-wallet'></i>
                <h3>Total Revenue</h3>
                <div class="value">$54k</div>
            </div>

            <div class="card">
                <i class='bx bxs-envelope'></i>
                <h3>Messages</h3>
                <div class="value">89</div>
            </div>

            <div class="card">
                <i class='bx bxs-data'></i>
                <h3>Server Usage</h3>
                <div class="value">24%</div>
            </div>
             <div class="card">
                <i class='bx bxs-report'></i>
                <h3>Reports</h3>
                <div class="value">12</div>
            </div>

        </div>
    </div>

</body>
</html>

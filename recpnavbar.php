<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHMS</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- my css -->
    <link rel="stylesheet" href="Css/RecpDashboard.css">
</head>

<body>
    <nav class="navbar" id="nav">
    <button class="toggle-menu" id="menu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="item-list">
                <span>P H M S</span>
            </div>
        <div class="nav-items">
            <div class="admin-profile">
                <div class="icons">
                    <img src="img/user.png" alt="admin">
                </div>
                <span>Admin</span>
            </div>
            <div class="item-list">
                <div class="icons">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <span>Dashboard</span>
            </div>
            <div class="item-list">
                <div class="icons">
                    <i class="fas fa-users"></i>
                </div>
                <span><a href="AddPatientsByRecp.php">Patients</a></span>
            </div>
            <div class="item-list">
                <div class="icons">
                    <i class="fas fa-list"></i>
                </div>
                <span><a href="listofPatientsByRecp.php">Patient List</a></span>
            </div>
            <div class="item-list">
                <div class="icons">
                <i class="far fa-eye"></i>
                </div>
                <span href="#">View</span>
            </div>
            <div class="logout">
                <div class="icons">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <span>Logout</span>
            </div>
        </div>
    </nav>

    <!-- javascript -->
    <script src="main.js"></script>
</body>

</html>
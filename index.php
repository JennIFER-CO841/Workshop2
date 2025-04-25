<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="logo">
        GetTickets
    </a>
    <button class="mobile-menu-btn">
        <i class="fas fa-bars"></i>
    </button>
    <div class="nav-links">
        <a href="index.php"> Home</a>
        <a href="users.php"> Users</a>
        <a href="tickets.php"> Tickets</a>
         <?php if (isset($_SESSION['user_id'])): ?> 
                </div>
            </div>
            <a href="logout.php"> Logout</a>
        <?php else: ?>
            <a href="login.php"> Login/Signup</a>
        <?php endif ?>
    </div>
    <?php if (isset($_SESSION['alert']) && isset($_SESSION['alert_type'])): ?>
        <div class="alert <?php echo $_SESSION['alert_type']; ?>"><?php echo $_SESSION['alert']; ?></div>
    <?php
        unset($_SESSION['alert'], $_SESSION['alert_type']);
    endif; ?>
</nav>
    
    <section class="hero">
        <div>
            <h1>Bienvenue sur GetTickets</h1>
            <?php if(isset($_SESSION['user_id'])):?>
                <a href="book_tickets.php" class="cta-button">Book Now</a>
                <?php else:?>
            <a href="login.php" class="cta-button">Login to Book</a>
            <?php endif;?>
        </div>
    </section> 

    <script src="js/index.js"></script>
</body>
</html>
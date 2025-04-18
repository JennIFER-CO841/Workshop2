<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header class="header">
        <h2 style="padding: 12px">OurTickets</h2>
            <ul>
                <li><a href="login.php">Signup/Login</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="tickets.php">Tickets</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
    </header> 

    <section class="hero">
        <div>
            <h1>Bienvenue sur notre site</h1>
            <p></p>
            <?php if(isset($_SESSION['user_id'])):?>
                <a href="tickets.php" class="cta-button">Book Now Your Tickets</a>
                <?php else:?>
                <a href="login.php" class="cta-button">Login to Book</a>
                <?php endif;?>
        </div>
    </section>
</body>
</html>
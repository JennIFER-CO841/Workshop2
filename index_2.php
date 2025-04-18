<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .w-450 {
            width: 450px;
        }
        .vh-100 {
            min-width: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        
            <form class="shadow w-450 p-3" 
                action="php/signup.php" 
                method="post">

                <h5 class="display-4 fs-0.5">Create Account</h5><br>
                    <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>

                <?php if(isset($_GET['success'])){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
                <?php } ?>
                <div class="mb-3">
                    <label class="form-label">Full Name 
                    </label>
                    <input type="text" 
                        class="form-control"
                        name="fname"
                        value="<?php (isset($_GET['fname']))?$_GET['fname']: 
                        ""; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">User name 
                    </label>
                    <input type="text" 
                        class="form-control"
                        name="uname"
                        value="<?php (isset($_GET['uname']))?$_GET['uname']: 
                        ""; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password
                    </label>
                    <input type="password" 
                        class="form-control"
                        name="pass">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email
                    </label>
                    <input type="email" 
                        class="form-control"
                        name="email">
                </div>

                <button type="submit" class="btn btn-dark">Sign Up</button>
                <a href="login.php" class="btn btn-dark">Login</a>
            </form>
        </div>
</body>
</html>
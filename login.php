<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                action="php/login.php" 
                method="post">

                <h4 class="display-4 fs-0.5">Login</h4><br>
                    <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>


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

                <button type="submit" class="btn btn-dark">Login</button>
                <a href="index_2.php" class="btn btn-dark">Sign Up</a>
            </form>
        </div>
</body>
</html>
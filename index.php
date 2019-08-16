<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <?php if ($_SESSION['message']) { ?>
        <div class="alert alert-info"><?php echo $_SESSION['message']; ?></div>
    <?php } ?>

    <?php if (!$_SESSION['auth']) { ?>
        <form class="form-signin" action="login.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="e-mail">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
        </form>
    <?php } else { ?>
        
        <form class="form-signin"action="login.php" method="post">
        	<h1 class="h3 mb-3 font-weight-bold text-center">Welcome!</h1>
            <input type="hidden" value="logout" name="logout">
            	<button class="btn btn-primary btn-block text-center" type="submit" id="adc">Logout</button>

            
        </form>
    <?php } ?>
</body>
</html>
<?php
$_SESSION['message'] = null;
?>

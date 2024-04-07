<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href=<?= DIREKTORI . '/css/style.css?' . time(); ?>>
</head>
<body>
    <div class="container vh-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <form action="<?= DIREKTORI ?>/login/verify" method="post" name="loginForm" autocomplete="off">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autofocus value="<?= $_SESSION['failedUser']['email'] ?? ''?> " onfocus="moveCursorToEnd(this)">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?= $_SESSION['failedUser']['password'] ?? ''?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#">Forgot password?</a> | <a href="#">Register</a>
                            <p id="errorLogin" class="text-center mt-1 hideContent"> EMAIL OR PASSWORD IS WRONG</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
    function showError() {
        document.getElementById('errorLogin').classList.remove('hideContent');
        setTimeout(function() {
            document.getElementById('errorLogin').classList.add('hideContent');
        }, 6000);
    }
    <?php
    if(isset($_SESSION['failed'])) {
        echo 'showError();';
        unset($_SESSION['failed']);
    }
    unset($_SESSION['failedUser']);
    ?>

function moveCursorToEnd(input) {
        const originalValue = input.value;
        input.value = ''; 
        input.blur(); 
        input.focus(); 
        input.value = originalValue;
}
</script>
</body>
</html>

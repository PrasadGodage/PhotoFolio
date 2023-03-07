<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./form-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Login</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="./loginL.php" method="POST">
                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="far fa-user p-2"></span>
                                    <input type="text" placeholder="Username or Email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input type="password" placeholder="Enter your Password" password="password" name="password" required>

                                </div>
                            </div>
                            <div class="form-inline">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="text-muted">Remember me</label>
                                <a href="#" id="forgot" class="font-weight-bold">Forgot password?</a>
                            </div>
                            <button class="btn btn-success btn-block mt-3" type="submit">Login</button>

                        </form>
                    </div>
                    <div class=" mx-3 my-2 py-2 bordert">
                        <div class="text-center py-3">

                            <a href="https://www.google.com" target="_blank" class="px-2">
                                <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt="">
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
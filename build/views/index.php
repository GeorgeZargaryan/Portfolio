<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>| Pluvia |</title>

</head>

<body name="indexBody" style="background-image: url('../assets/backgrounds/background_1.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <h1 class="logoIndex">Pluvia</h1>
    <nav class="row" style="width: 100%;">
        <div class="col-4"></div>
        <div class="col-5"></div>
    <div class="themeSwitch col-3">
        <a onclick="changeTheme(1)" class="changeToDark" id="themeChangeBtn">Dark Theme</a>
    </nav>
    <div class="row SignTo">
        <div class="col-3"></div>
        <div class="card card-body col-5" id="signInDiv">
            <p class="SignInTitle text-center">Welcome</p>
            <form action="../controllers/signIn.php" method="POST">
                <div class="signInBlock">
                    <label for="SignInEmail">Email:</label>
                    <input type="email" name="SignInEmail" id="SignInEmail" class="form-label" placeholder="yourmail@smth.smt" required>
                </div>
                <div class="signInBlock">
                    <label for="SignInPass">Password:</label>
                    <input type="password" name="SignInPass" id="SignInPass" class="form-label" placeholder="yourpassword" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary SignInBtn mb-3">
                        SignIn
                    </button>
                </div>
            </form>
            <?php if (isset($_GET['id'])) { ?>
                <?php if ($_GET['id'] == 0) { ?>
                    <div class="alert alert-success" role="alert">
                        You had succesfully sign up!!!
                    </div>
                <?php } ?>
                <?php if ($_GET['id'] == 1) { ?>
                    <div class="alert alert-danger" role="alert">
                        Invalid password
                    </div>
                <?php } ?>
                <?php if ($_GET['id'] == 2) { ?>
                    <div class="alert alert-danger" role="alert">
                        Passwords are not same
                    </div>
                <?php } ?>
                <?php if ($_GET['id'] == 3) { ?>
                    <div class="alert alert-danger" role="alert">
                        Password is too short
                    </div>
                <?php } ?>
                <?php if ($_GET['id'] == 4) { ?>
                    <div class="alert alert-danger" role="alert">
                        No entered password
                    </div>
                <?php } ?>
                <?php if ($_GET['id'] == 5) { ?>
                    <div class="alert alert-danger" role="alert">
                        Your email already used
                    </div>
                <?php } ?>
                <?php if ($_GET['id'] == 6) { ?>
                    <div class="alert alert-danger" role="alert">
                        Invalid email or password
                    </div>
                <?php } ?>
            <?php } ?>
            <a class="text-center cardLink" href="#" onclick="openSignUp()">SignUp</a>
        </div>
        <div class="card card-body col-5" id="signUpDiv">
            <p class="SignInTitle text-center">Create Account</p>
            <form action="../controllers/signUp.php" method="POST">
                <div class="signUpBlock">
                    <label for="SignUpEmail">Email:</label>
                    <input type="email" name="SignUpEmail" id="SignUpEmail" class="form-label" placeholder="yourmail@smth.smt" required>
                </div>
                <div class="signUpBlock">
                    <label for="SignUpPass">Password:</label>
                    <input type="password" name="SignUpPass" id="SignUpPass" class="form-label" placeholder="yourpassword" required>
                </div>
                <div class="signUpBlock">
                    <label for="SignUpConfPass">Confirm Password:</label>
                    <input type="password" name="SignUpConfPass" id="SignUpConfPass" class="form-label" placeholder="confirmpassword" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary SignInBtn">
                        SignUp
                    </button>
                </div>
            </form>
            <a class="text-center mt-4 cardLink" href="#" onclick="openSignIn()">SignIn</a>
        </div>
        <div class="col-3"></div>

    </div>

    <script src="../scripts/indexpage.js"></script>
</body>

</html>
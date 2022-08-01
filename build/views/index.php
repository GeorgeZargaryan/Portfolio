<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>| Portfolio |</title>

</head>

<body>
    <h1 class="logoIndex">Logo</h1>
    <div class="row SignIn">
        <div class="col-3"></div>
        <div class="card card-body col-5">
            <p class="SignInTitle text-center">SignIn</p>
            <form action="../controllers/SignIn.php" method="POST">
                <div class="signinDiv">
                    <label for="SignInEmail">Email:</label>
                    <input type="email" name="SignInEmail" id="SignInEmail" class="form-label" placeholder="yourmail@smth.smt" required>
                </div>
                <div class="signinDiv">
                    <label for="SignInPass">Password:</label>
                    <input type="email" name="SignInPass" id="SignInPass" class="form-label" placeholder="yourpassword" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary SignInBtn">
                        SignIn
                    </button>
                </div>
            </form>
            <a class="text-center pt-4"href="#" onclick="openSignUp()">SignUp</a>
        </div>
        <div class="col-3"></div>
    </div>
</body>

</html>
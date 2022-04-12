<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/signup.css">
</head>

<body>
    <div class="overlay"></div>

    <!-- login -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="post" action="db/signup.php">
                    <h1>Sign Up:</h1>
                    <div class=" input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Full-Name </span>
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name"
                            aria-label="email" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email </span>
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="email"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Password </span>
                        <input placeholder="Password" type="password" name="password"
                            class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <br>
                   
                    <span class="input-group-text" id="basic-addon1">User Type </span>
                    <input type="radio" id="html" name="user_type" value="normal">
                        <label for="html">Normal User</label><br>
                        <input type="radio" id="css" name="user_type" value="super">
                         <label for="css">Super User</label><br>
                    <hr />
                    <span>Already Account ?</span> <a href="login.php">Login</a>

                    <input type="submit" value="Signup" name="submit" style="float:right;"
                        class="btn btn-outline-success">
                </form>
                <?php include('include/message.php') ?>
            </div>
        </div>
    </div>

</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


</html>
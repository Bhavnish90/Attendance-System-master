<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
    <title>Student Attendance</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Register Form - Pure Coding</title> -->
</head>

<body>
    <form id="signup">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" placeholder="Name" type="text" name="name">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control" placeholder="Phone" type="text" name="phone">
        </div>
        <div class="form-group">
            <label>Email ID</label>
            <input class="form-control" placeholder="Email" type="email" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" placeholder="Password" type="password" name="password">
            <span class="help-block">Password should be 8 characters long.</span>
        </div>
        <div class="form-group">
            <label>Re-type Password</label>
            <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
        </div>
        <button class="btn btn-primary pull-right">Sign Up</button>
        <p class="login-register-text">Already have an account <a href="index.php">sign in</a>.</p>
    </form>
</body>

</html>
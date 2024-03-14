<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-black pt-5">Login Admin</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                       <form action="validate.php" method="POST" name="login" class="form-signin">
        <label for="username" class="text-info">Username:</label><br>
        <input type="text" id="inputuser" class="form-control" placeholder="Username" name="user_name" required autofocus>
         <label for="inputPassword" class="text-info">Password:</label><br>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <br>
        <button class="btn btn-primary btn-block" type="submit">Login</button>
   </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>





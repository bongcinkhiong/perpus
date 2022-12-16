<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form action="proses.php" method="POST" class="form">
        <label for="username" style="padding-top:13px">Username</label>
        <input id="username" class="form-content" type="text" name="username"/>

        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password</label>
        <input id="password" class="form-content" type="password" name="password"/>

        <div class="form-border"></div>
        <a href ="https://accounts.google.com/b/1/AddMailService">Forgot password?</a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <a href="../register/index.php" >Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>
</html>
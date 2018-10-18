<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>div{padding: 10px;font-size:20px;}</style>
<title>ログイン</title>
</head>
<body>


<header>
  <nav class="navbar navbar-default">LOGIN</nav>
</header>


<form name="form1" action="login_act.php" method="post">
  <p>
    ID：<input type="text" name="lid" placeholder="ID" size="30">
  </p>
  <p>
    PW：<input type="password" name="lpw" placeholder="PW" size="30">
  </p>
  <!-- ID:<input type="text" name="lid" placeholder="ID"/>
  PW:<input type="password" name="lpw" placeholder="PW"/> -->
  <input type="submit" value="LOGIN" />
</form>


</body>
</html>
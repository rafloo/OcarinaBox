
<style >
  body{
    background-color: lightblue;
  }
  form {
    font-family: monospace;
    font-size: 15px;
    border-radius: 5px 50px;
    background-color: royalblue;
    z-index: 1;
  }
  ul li {
    list-style-type: none;
  }
  input{
    width: 100px;
    height:50px;
    margin: 10px;
    border: 2px solid purple;
    border-radius: 2px 10px;
    text-align: center;
  }
</style>

 <?php
  $users = require("_db.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email =isset($_POST["mail"]) ? $_POST["mail"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    if (isset($users[$username]) && $users[$username] && $email[$username] == $password) {
      $_SESSION["username"] = $username;
      require_once ("game.php");
    }

  }
  ?>
 <nav id="navlog">
  <ul>
    <li>
      <form action="_login.php" method="post">
        <label for="mailid">mail</label>
        <input type="text" id="mailid" name="mail" placeholder=""/>
        <label for="userid">username</label>
        <input id="userid" type="text" name="username" value="">
        <label for="pwdid">password</label>
        <input id="pwdid" type="password" name="password" value="">
        <input type="submit" name="connection" value="connexion">
      </form>
    </li>
    <li>
      <a href="signup.php">S'inscrire</a>
    </li>
  </ul>
</nav>

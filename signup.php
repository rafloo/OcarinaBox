<?php
require("_login.php");
 ?>
<style>
body{
  background-color: lightblue;
}
form {
  /*padding-top: 150px;
  padding-bottom: 150px;*/
  font-family: monospace;
  font-size: 15px;
  /*margin-left: 150px;
  margin-right: 150px;*/
  text-align: center;
  border-radius: 5px 50px;
  background-color: royalblue;
}
ul li {
  list-style-type: none;
}
input{
  width: 200px;
  height:50px;
  margin: 10px;
  border: 2px solid purple;
  border-radius: 2px 10px;
  text-align: center;
}
#inscription{
  font-size: 30px;
  color: red;
}
</style>
<?php
require_once("_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email =isset($_POST["email2"]) ? $_POST["email2"] : "";
  $username = isset($_POST["username2"]) ? $_POST["username2"] : "";
  $password = isset($_POST["password2"]) ? $_POST["password2"] : "";
  if ($username && $email && $password){
    try {
    $request = $_DB->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
    $request->execute(array("username" => $username,"email" => $email, "password" => $password));echo "<h1 id=inscription>votre inscription a été prise en compte</h1>";
  } catch (PDOException $e){
    echo "erreur en écrivant les données dans la DATABASE" . $e -> getMessage();
    die();
  }
}
}
  ?>
  <nav>
    <ul>
      <li>
        <form action="signup.php" method="post">
          <label for="mailid2">mail</label><br/>
          <input type="text" id="mailid2" name="email2" placeholder="enter your email"/><br/>
          <label for="userid2">username</label><br/>
          <input id="userid2" type="text" name="username2" value=""><br/>
          <label for="pwdid2">password</label><br/>
          <input id="pwdid2" type="password" name="password2" value=""><br/>
          <input type="submit" name="Inscription" value="Inscription"><br/>
        </form>
      </li>
    </ul>
  </nav>

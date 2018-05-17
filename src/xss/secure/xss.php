<?php
  session_start();
?>

<html>
  <body>
    <h1>ユーザー情報登録</h1>
      <pre>
        <?php
        /*  if(isset($_GET['name'])){
            var_dump($_GET);
            $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
            $url = htmlspecialchars($_GET['url'], ENT_QUOTES, 'UTF-8');
          }
          $confirm = 'http://localhost:8000/xss/secure/xss_confirm.php'
          header("Location: {$confirm}"); */
        ?>
      </pre>
      <form action="./xss_confirm.php" method="post">
        名前:<input type="text" name="name"><br/>
        URL:<input type="text" name="url"><br/>
        <input type="submit" value="確認">
        <input type="reset" value="リセット">
      </form>
    </body>
</html>

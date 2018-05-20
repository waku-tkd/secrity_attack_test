<?php
  session_start();
?>

<html>
  <body>
    <h1>ユーザー情報登録</h1>
      <?php
        $url = 'javascript: alert(document.cookie);';

        if (isUrl($url)) {
          var_dump('this is URL!');
        } else {
          var_dump('warning, this is not URL!');
        }

        function isUrl($url) {
          return (boolean)preg_match('{A(https?://|/)}',$url);
        }
      ?>
      <form action="./xss_confirm.php" method="post">
        名前:<input type="text" name="name"><br/>
        URL:<input type="text" name="url"><br/>
        <input type="submit" value="確認">
        <input type="reset" value="リセット">
      </form>
    </body>
</html>

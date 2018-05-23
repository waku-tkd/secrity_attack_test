# XSS（クロスサイトスプリッティング）
* Chromeだとブラウザの処理で弾くのでFirefoxで試す

## XSSとは
XSSとは、動的ページにおける脆弱性のひとつであり、ユーザーに表示するページへ悪意のあるスクリプトを埋め込む攻撃方法である。

## 攻撃例
`http://localhost:8000/xss.php` にアクセスして、名前欄に `<script>alert(document.cookie)</script>` を入れるとCookie情報が取得できる
また名前欄に `http://localhost:8000/xss_confirm.php?name="><script>window.location=%27http://localhost:8000/xss.php?%27%2bdocument.cookie;</script>` みたいにしておけば取得したCookie情報を使って確認画面にアクセスができてしまう。

## 対策方法
1. フォームにscriptを仕込めないようにする。例えば、フォームの入力内容をエスケープしてしまうなど。
```
<?php
  session_start();
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
  $url = htmlspecialchars($_POST['url'], ENT_QUOTES, 'UTF-8');
?>
```


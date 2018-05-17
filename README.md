# 起動方法
Dockerfileのあるディレクトリ下で `docker build -t php7test .` を実行
`docker run -v <local file path>/src:/var/www/html -d -p 8000:80 --name php7cont php7test` でコンテナ外のソース読ませながらコンテナ起動

# XSS実験
* Chromeだとブラウザの処理で弾くのでFirefoxで試す
## 攻撃例
`http://localhost:8000/xss.php` にアクセスして、名前欄に `<script>alert(document.cookie)</script>` を入れるとCookie情報が取得できる
また名前欄に `http://localhost:8000/xss_confirm.php?name="><script>window.location=%27http://localhost:8000/xss.php?%27%2bdocument.cookie;</script>` みたいにしておけば取得したCookie情報を使って確認画面にアクセスができてしまう。

## 対策方法
フォームにscriptを仕込めないようにする

# PHP起動方法
Dockerfileのあるディレクトリ下で `docker build -t php7test .` を実行
`docker run -v <local file path>/src:/var/www/html -d -p 8000:80 --name php7cont php7test` でコンテナ外のソース読ませながらコンテナ起動

# MySQL起動方法
`docker run --name mysql5.7 -p 3307:3306 -e MYSQL_ROOT_PASSWORD=pass -e MYSQL_ROOT_USER=root -e MYSQL_DATABASE=test -d mysql:5.7`で、ポート番号3307、パスワード`pass`DB名`test`のrootユーザーが作成できる。
ローカルからは`mysql -h 127.0.0.1 -r root -p -d test`で接続可能。
ただしホストは`localhost`ではなく`127.0.0.1`を指定すること。
現在は永続化させていないので、コンテナを削除したらデータは消える。


# 脆弱性一覧
[XSS](./doc/xss.md)

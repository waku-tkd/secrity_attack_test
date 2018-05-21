# 起動方法
Dockerfileのあるディレクトリ下で `docker build -t php7test .` を実行
`docker run -v <local file path>/src:/var/www/html -d -p 8000:80 --name php7cont php7test` でコンテナ外のソース読ませながらコンテナ起動

[XSS](./doc/xss.md)

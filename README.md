お問い合わせフォーム

環境構築
  Dockerビルド
  1.git clone
  2.docker-compose up -d --build
  ※　MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築
  1.docker-compose exec php bash
  2.composer install
  3..env.exampleファイルから.envを作成し、環境変数を変更
  4.php artisan key:generate
  5.php artisan migrate
  6.php artisan db:seed

ER図
https://raw.githubusercontent.com/aocyan/contact-formtest/988c667ec2a8861d0fd5bb96192dc6603cdfe3e2/confirmtest.drawio.png

使用技術
　・PHP 7.4.9
  ・Laravel 8.83.8
  ・MYSQL 15.1

URL
　・開発環境：http://localhost/
　・phpMyAdmin：http://localhost:8080/

テスト作成状況
　一部箇所にバグと実装できていない部分があります。
 　1.registerページにて新規ユーザ情報を入力し、登録画面を押すとlogin画面に遷移せずadmin画面に遷移する。
   2.adminページのページネーション機能は実装済みだが、仕様書のイメージになっていない。（cssを実装できていない）
   3.adminページの一部の検索機能（性別検索以外）、詳細ボタンを押すとモーダルウィンドウの表示、エクスポート機能が未実装である。
   4.name属性のcontentとdetailが仕様書と逆の構成になっている。（お問い合わせの種類をdetailで、お問い合わせ内容をcontentで処理している）

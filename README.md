# Laravel 10で簡単なECサイトを作る

## 開発時の環境

- macOS 14.4.1
- PHP 8.3.4
- Laravel 10.48.4

Windows環境でも問題なく動きます。

## 前提条件

下記の環境がインストールされていることが前提となっています。

- composer
- Node.js

下記の書籍でLaravel 10を学習済みの方が対象となっています。

- PHPフレームワークLaravel入門 第2版（秀和システム）

## 学習の進め方

- まずは「Laravel 10で簡単なECサイトを作る(仕様書).pdf」を見て、どのようなものを作るのかを把握してください。
- 「Laravel10で簡単なECサイトを作る.pdf」を見ながら、コーディングを進めてください。

## githubに上がっている課題のサンプルを動かしてみよう

- 下記の手順でサンプルコードを動かすことができます。

githubからソースコードを入手
```
git clone https://github.com/miraino-katachi/laravel_ec10
```

プロジェクトのディレクトリに移動
```
cd src/shop
```

Laravel本体をダウンロード
```
composer install
```

Sqliteのファイルを作成
```
touch database/database.sqlite または、空のファイルを作成
```

.env.exampleをコピーして.envを作成し編集、アプリケーションキーを発行
```
php artisan key:generate
```

表示に必要なパッケージをインストール
```
npm install && npm run build
```

マイグレーションを実行
```
php artisan migrate
```

シーダーを実行
```
php artisan db:seed
```

サーバーを起動して動作確認
```
php artisan serve
```


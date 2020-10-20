# learning
Larave+React学習用

Reactはコンポーネントベースなので、部品ごとにファイルを分けて個々にメンテナンスができる

また、デザインも容易に作成できる


Laravel + React開発のすすめ（React部分のみ抜粋）


_____________________________________________________________________________

Laravel7+React環境構築

laravel7でプロジェクトを作成している前提で進める

デフォルトではvueが有効になっているのでreactに変更 + laravel標準の認証機能も追加しておく

composer require laravel/ui 

php artisan ui react --auth

composerをアップデートしておく

composer update

npm(node-js)をアップデート

npm install && npm update

npmをコンパイル
npm run dev

__________________________________________________________________________________

Larevel + Reactのディレクトリ構成

resources/js/内にreact関連のファイルやディレクトリが格納されている
resources/views/内にLaravelのviewが格納されている


___________________________________________________________________________________

reactでボタンを表示するサンプル

testhub内のcompornentsフォルダをresources/jsの中にコピー
vies/welcome.blade.phpはすでに各々のフォルダ内に作られているのでコードをカキカエレば良い

↑の作業が終わったら
resources/js/app.js内にrequire('./components/Example');というコードを追加する

require('ファイルパス');　とは、外部ファイルをインポートする構文



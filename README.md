# learning
React学習用

Laravel + React開発のすすめ（React部分のみ抜粋）

testhub内のcompornentsフォルダをresources/jsの中にコピー
vies/welcome.blade.phpはすでに各々のフォルダ内に作られているのでコードをカキカエレば良い

↑の作業が終わったら
resources/js/app.js内にrequire('./components/Example');というコードを追加する

require('ファイルパス');　とは、外部ファイルをインポートする構文


Reactはコンポーネントベースなので、部品ごとにファイルを分けて個々にメンテナンスができる

また、デザインも容易に作成できる

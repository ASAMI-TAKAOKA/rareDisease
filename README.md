# 希少疾患を発見するアプリケーション『Rare Disease』

#### 使用技術・環境
- フロントエンド
  - HTML5
  - Vue.js 2

- バックエンド
  - Laravel 8

- DB
  - MySQL 5.7

#### 開発環境
- VScode

#### バージョン管理
- Git/GitHub

#### その他技術
- レスポンシブデザイン対応

## 制作背景
長年、原因不明の体調不良に悩んでいた友人がいます。<br>
最近になってようやく原因となる病気が判明しましたが、<br>
希少疾患であったため、インターネットで情報を探しても<br>
病院で検査してもなかなか分からず<br>
ずっと苦しんでいました。<br>
希少疾患に特化したサイトがあれば、<br>
そういった人たちの助けになるのではと考え<br>
このアプリを開発いたしました。<br>

## 画面一覧
### ① 希少疾患一覧画面
![スクリーンショット 2022-09-20 18 59 21](https://user-images.githubusercontent.com/77926245/191229895-b32ad046-0ab0-4526-b290-e97310f789a7.png)
<br>
<br>
### ②希少疾患に関する新規記事の投稿画面
![スクリーンショット 2022-09-20 18 59 56](https://user-images.githubusercontent.com/77926245/191229920-262375b0-02c5-41b7-928a-a84ecceeee8d.png)
<br>
<br>
### ③希少疾患に関する記事の詳細画面
![スクリーンショット 2022-09-20 19 01 00](https://user-images.githubusercontent.com/77926245/191229935-cdfa6b16-f610-4920-bf2b-7941b6b1b6fb.png)
<br>
<br>
### ④希少疾患に関する記事の編集画面
![スクリーンショット 2022-09-20 19 01 31](https://user-images.githubusercontent.com/77926245/191229945-18935e88-cc0a-464c-b7b8-5bcc8fb72609.png)
<br>
<br>
### ⑤会員登録画面
![スクリーンショット 2022-09-20 19 02 19](https://user-images.githubusercontent.com/77926245/191231711-5d1f0167-8920-4b71-81f4-f145d6b172cf.png)
<br>
<br>
### ⑥ログイン画面
![スクリーンショット 2022-09-20 19 02 50](https://user-images.githubusercontent.com/77926245/191231741-9c863c9d-ec01-4433-957b-5dacf7a153d0.png)
<br>
<br>
### ⑦ユーザー一覧画面（要修正）
![スクリーンショット 2022-09-20 19 20 39](https://user-images.githubusercontent.com/77926245/191233457-fdde7fb9-1a88-4c5d-8fe8-ea1bdb5ef4da.png)
<br>
<br>
### ⑧ユーザー詳細画面（要修正）
<br>
<br>
![スクリーンショット 2022-09-20 19 22 03](https://user-images.githubusercontent.com/77926245/191233850-94441d5c-bd7f-4524-ba6c-beca754c7d60.png)

## 課題と思う部分
- User一覧画面が正しく表示されない
- User詳細画面が正しく表示されない
- 各テーブルのリレーションの設定が未実装
- バリデーションの設定が未実装
- デザインが整っていない

## 今後の予定
- テーブルの追加
  - infoテーブル（yahoo!ニュースをはじめとする、ライターが書いた外部記事）
  - commentテーブル（記事に対するコメント）
  - DMテーブル（1対1でのやり取り）
- ヘッダーにアイコンの追加
- フッターの追加
- 検索機能の追加（病名・キーワードを入力し、外部記事、内部記事問わず記事を検索）
- 並び替え機能の追加
- ページング機能の追加
- 画像投稿機能の追加
- ハンバーガーメニューの追加（人気記事一覧を表示させる）
- UI/UXの改善
- CircleCI導入
- ECS導入
- 本番環境への公開


<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>

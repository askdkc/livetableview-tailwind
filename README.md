# Laravel Livewireを使った動的なデータテーブル
これはLivewireの作者Caleb Porzioが作成したLivewireを使用した下記のLivewire Datataableを少し修正したレポジトリです

[livewire-datatable](https://github.com/calebporzio/laracasts-livewire-datatable "laracasts-livewire-datatable")

特徴として
- Laravel 9 対応
- Livewire 2 対応
- Tailwindcss 3 対応


## 使い方
```
# git clone このリポジトリ
# cd livetableview-tailwind
# cp .env.example .env
# composer install
# php artisan key:generate
```

## DBの準備
```
# touch database/database.sqlite
```

## migratin
```
# php artisan migrate --seed
```

## 動作確認
```
# php artisan serve

http://127.0.0.1:8000 にアクセス
```

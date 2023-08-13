# セットアップ

## Tips
### Modelの作成
```sh
php artisan make:model Post -cfr # Post Modelを作成
# オプションの詳細： https://laravel.com/docs/10.x/eloquent#generating-model-classes
php artisan code:models # Modelファイルのrelationなどを自動生成
php artisan ide-helper:models -W # ModelファイルのDocコメントを自動生成
php artisan generate:factory --force # Factoryファイルを自動生成
```

## 使用ツール
- https://github.com/barryvdh/laravel-ide-helper
- https://github.com/TheDoctor0/laravel-factory-generator
- https://github.com/reliese/laravel

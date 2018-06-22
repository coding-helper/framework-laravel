# framework-laravel
- php项目laravel基本框架
- base on [laravel5.6.21](https://github.com/laravel/laravel/tree/v5.6.21)
- [参考文档](https://laravel-china.org/docs/laravel/5.6)

## php extension
- PHP >= 7.1.3
- Composer
- OpenSSL PHP
- PHP PDO 扩展
- PHP Mbstring 扩展
- PHP Tokenizer 扩展
- PHP XML 扩展
- PHP Ctype 扩展
- PHP JSON 扩展

## 部署运行
- 拉取代码
- 安装依赖
```shell
  composer install
```

- 配置准备
    - 更多问题请参考[安装文档](https://laravel-china.org/docs/laravel/5.6/installation/1352)
```shell
  ./deploy.sh
```

- 配置nginx和fpm

## 集成组件
### predis
- 引入 `predis`
```shell
composer require predis/predis
```

### token鉴权
- 实现了token的中间键
  - 配置在 `config/token.php`
  - 需要重新指定redis中存储的键，配置在`.env`

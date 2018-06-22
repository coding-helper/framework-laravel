# framework-laravel
- php项目laravel基本框架
- base on [laravel5.6.21](https://github.com/laravel/laravel/tree/v5.6.21)
- [参考文档](https://laravel-china.org/docs/laravel/5.6)

## Installation

### php extension
- PHP >= 7.1.3
- OpenSSL PHP
- PHP PDO 扩展
- PHP Mbstring 扩展
- PHP Tokenizer 扩展
- PHP XML 扩展
- PHP Ctype 扩展
- PHP JSON 扩展


### 在此基础上我们做了什么
- composer引入 `predis`
 * 命令:`composer require predis/predis`
- 实现了token的中间键
 * 配置在 `config/token.php`
 * 需要重新指定redis中存储的键，配置在`.env`

### 你需要做
- 执行
```shell
composer install
```

- 生成 **.env** 文件
- 执行
  * `php artisan key:generate`
- 更多问题请参考[安装文档](https://laravel-china.org/docs/laravel/5.6/installation/1352)


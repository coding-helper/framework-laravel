<?php

return [

    /**
     * redis prefix token key
     **/
    'redisPrefixTokenKey' => env('APP_NAME_ABBR', ''),

    /**
     * redis token key
     **/
    'redisTokenKey' => env('APP_NAME_ABBR', '') . 'Token',

    /**
     * redis anti multi login token key
     **/
    'redisAmlTokenKey' => env('APP_NAME_ABBR', '') . 'AmlToken',

    /**
     * redis tolerant token key
     **/
    'redisTolerantTokenKey' => env('APP_NAME_ABBR', '') . 'TolerantToken',

    /**
     * 有效使用时间半小时（秒）
     */
    'invalid' => 60 * 30,

    /**
     * 经过多久刷新一次token(秒,token生成时计时)
     */
    'after' => 60 * 60,

    /**
     * 有效刷新时间一天（秒）
     */
    'refresh' => 60 * 60 * 24,

    /**
     * 宽容时间（秒）
     */
    'tolerant' => 10,

    'web' => [
        'invalid' => 60 * 15
    ],

];

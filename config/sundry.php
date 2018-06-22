<?php
/**
 * Created by PhpStorm.  各种杂项控制
 * User: MJ
 * Date: 2018/6/13
 * Time: 11:02
 */

return [
    /**
     * token
     */
    'token' => [
        /**
         * 有效使用时间半小时（秒）
         */
        'invalid' => 1800,

        /**
         * 经过多久刷新一次token(秒,token生成时计时)
         */
        'after' => 300,

        /**
         * 有效刷新时间一天（秒）
         */
        'refresh' => 86400,

        /**
         * 宽容时间（秒）
         */
        'tolerant' => 30
    ]


];
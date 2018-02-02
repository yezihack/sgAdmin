<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 16:55
 */
define('SGLOGS_PATH', str_replace('\\', '/', dirname(__DIR__)) . '/' . 'public/logs/');

if (!function_exists('mylog')) {
    /**
     * 写日志
     * @param $data
     * @param string $flag
     * @param bool $is
     * @param string $title
     */
    function mylog($data, $flag = 'None', $is = false, $title = '断点日志')
    {
        \App\Plugin\SgLogs::write($data, $flag, $is, 'debug', $title);
    }
}
<?php

namespace App\Plugin;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/27
 * Time: 15:48
 */
class WxHelp
{
    /**
     * 获取openid
     * @param $code
     * @return bool|string
     */
    function getOpenInfo($code)
    {
        if (!$this->is_weixin()) {
            return false;
        }
        $url_format = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=%s&secret=%s&code=%s&grant_type=authorization_code';
        $url        = sprintf($url_format, config('wx.app_id'), config('wx.app_secret'), $code);
        $data       = $this->curlGet($url);
        if ($data) {
            return $data;
        }
        return false;
    }

    /**
     * 获取用户信息，包括头像
     * @param $openid
     * @param $access_token
     * @param string $lang
     * @return string
     */
    function getUserInfo($openid, $access_token, $lang = 'zh_CN')
    {
        $query = array (
            'access_token' => $access_token,
            'openid'       => $openid,
            'lang'         => $lang,
        );
        $url   = 'https://api.weixin.qq.com/sns/userinfo?' . http_build_query($query);
        $data  = $this->curlGet($url);
        if ($data) {
            return $data;
        }
        return false;
    }

    /**
     * 判断是否是微信
     * @return bool
     */
    function is_weixin()
    {
        if (strpos($_SERVER['HTTP_HOST'], '192.168') !== false) return false;
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
            return true;
        }
        return false;
    }

    /**
     * curl get 支持https, curl_get简写
     * @param string $url 请求url
     * @param int $timeout 超时设置,默认60秒
     * @return string 返回结果
     */
    function curlGet($url, $timeout = 60)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_URL, $url);
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;
    }
}
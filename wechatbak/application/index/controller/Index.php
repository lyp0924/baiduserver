<?php

namespace app\index\controller;

use think\Request;

class Index
{
//    private $APPID = "wxf9de833ffb14f83b";
    private $APPID = "wxea46fcfda3da484f";//test

//    private $APPSECRET = "d294f915e2f847eaba0677fa6b073bfe";
    private $APPSECRET = "dd7d931288fd9ff5e20ce6a6f35d55e1";//test

    private  $postObj;

    public function __construct(){    //构造函数
        if (!isset($_GET['echostr'])){
            //php7.0只能用这种方式获取数据，之前的$GLOBALS['HTTP_RAW_POST_DATA']7.0版本不可用
            $postArr = file_get_contents("php://input");
            //读取xml格式文件,记得安装php7.0-xml
            $this->postObj = simplexml_load_string($postArr);
        }
    }

    public function index($name='lyp',$id=0)
    {
        var_dump($name);
        var_dump($id);
        var_dump($_GET);
        var_dump(Request::instance()->param());
        return ;
        if (!isset($_GET['echostr'])){
            if(strtolower($this->postObj->MsgType) == 'event'){ //事件消息
                if(strtolower($this->postObj->Event) == 'subscribe'){
                    $this->sendText("欢迎光临！");
                } elseif(strtolower($this->postObj->Event) == 'click'){
                    if (strtolower($this->postObj->EventKey) == 'introduct'){
                        $this->sendText("你点击了简介按钮,\n    这是一个测试号,你可以：\n        逗比，你什么也做不了！！！");
                    }
                    if (strtolower($this->postObj->EventKey) == 'updatemenu'){
                        $re = $this->setMenu();
                        if ($re['errcode'] == 0){
                            $this->sendText("菜单已更新，重新关注即可刷新");
                        } else {

                        }
                    }
                }
            } elseif(strtolower($this->postObj->MsgType) == 'text') { //文本消息


            } elseif(strtolower($this->postObj->MsgType) == 'image') { //图片消息


            } elseif(strtolower($this->postObj->MsgType) == 'voice') { //语音消息


            } elseif(strtolower($this->postObj->MsgType) == 'video') { //视频消息


            } elseif(strtolower($this->postObj->MsgType) == 'shortvideo') { //小视频消息


            } elseif(strtolower($this->postObj->MsgType) == 'location') { //地理位置消息


            } elseif(strtolower($this->postObj->MsgType) == 'link') { //链接消息
                $this->sendText("链接");
            }
        } else {
        }

    }

    public function test(){
        echo '测试';
    }

    private function sendText($text){
        $toUser	= $this->postObj->FromUserName;
        $fromUser	= $this->postObj->ToUserName;
        $time = time();
        $msgType = 'text';
        $content = $text;
        $template = "<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                     </xml>";
        $info= sprintf($template,$toUser,$fromUser,$time,$msgType,$content);
        echo $info;
        return;
    }

    private function setMenu()
    {
        $accessToken = $this->getAccessToken();
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $accessToken['access_token'];
        $menu = array(
            "button" => array(
                array(
                    "type" => "view",
                    "name" => "官网",
                    "url" => "http://www.easyphp.top",
                ),
                array(
                    "type" => "click",
                    'name' => '简介',
                    "key" => "introduct",
                ),
                array(
                    'name' => '其他',
                    "sub_button" => array(
                        array(
                            "type"=>"location_select",
                            "name"=>"发送位置",
                            "key"=>"sendLocal"
                        ),
                        array(
                            "type"=>"click",
                            "name"=>"更新菜单",
                            "key"=>"updateMenu"
                        ),
                    ),
                ),
            ),
        );
        $re = $this->postHttp($url, $menu);
        return $re;
    }

    private function getAccessToken()
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $this->APPID . "&secret=" . $this->APPSECRET;
        $accessToken = $this->getHttp($url);
        return $accessToken;
    }

    private function validate()
    {
        $nonce = $_GET['nonce'];
        $token = 'LiuY';
        $timestamp = $_GET['timestamp'];
        $echostr = $_GET['echostr'];
        $signature = $_GET['signature'];
        //形成数组，然后按字典序排序
        $array = array($nonce, $timestamp, $token);
        sort($array);
        //拼接成字符串,sha1加密 ，然后与signature进行校验
        $str = sha1(implode($array));
        if ($str == $signature && $echostr) {
            //第一次接入weixin api接口的时候
            echo $echostr;
            exit;
        }
    }

    private function postHttp($url, $data)
    {
        if (is_array($data)) {
            $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        }
        $curl = curl_init();
        $headerArray = array("Content-type:application/json;", "Accept:application/json");
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headerArray);
        $output = curl_exec($curl);
        curl_close($curl);
        $output = json_decode($output, true);
        return $output;
    }

    private function getHttp($url, $data = array())
    {
        $headerArray = array("Content-type:application/json;", "Accept:application/json");
        $dataArray = array();
        $dataString = '';
        if (count($data) > 0) {
            foreach ($data as $k => $v) {
                $dataArray[] = $k . "=" . $v;
            }
            $dataString = implode("&", $dataArray);
            $dataString = "?" . $dataString;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . $dataString);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, true);
        return $output;
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 18:53
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{

    private $status;
    private $msg;
    private $errorCode;

    public function render(Exception $ex)
    {
        $request = Request::instance();
        if ($ex instanceof BaseException) {
            //自定义异常，要给客户端回显的具体信息的，不记录日至
            $this->status = $ex->status;
            $this->msg  = $ex->msg;
            $this->errorCode =$ex->errorCode;

        } else {
            //否则就为系统异常
            //系统异常分线上和线下，所以需要判断是否为debug模式
            if(config("app_debug")){
                //如果debug模式开启，则抛出系统原有的异常
                return parent::render($ex);
            }else{
                //服务器500的，记录日至
                $this->status = 500;
                $this->msg  = "服务器异常";
                $this->errorCode =999;

                //将异常写入日至
                $this->recordErrorLog($ex);
            }
        }

        $resArr=[
            "msg"=>$this->msg,
            "errorCode"=>$this->errorCode,
            "url"=>$request->url()
        ];

        return json($resArr,$this->status);
    }

    //记录日至的方法
    public function recordErrorLog($ex)
    {
        Log::init([
            'type'  => 'File',
            'path'  => LOG_PATH,
            'level' => ["error"]
        ]);

        Log::record($ex->getMessage(),"error");

    }
}
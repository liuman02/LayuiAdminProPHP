<?php
/**
 * @Author: anchen
 * @Date:   2018-02-14 15:21:06
 * @Last Modified by:   pizepei
 * @Last Modified time: 2018-04-20 17:17:17
 */


namespace app\user\controller;
use think\Controller;
use custom\TerminalInfo;
/**
 * 当前用户信息
 */
class User extends \VerifiController\AdminLoginVerifi
{
    /**
     * [title 标题]
     * @Effect
     * @return [type] [description]
     */
    static function title()
    {

        return[
            'userSeesion'=>'当前用户基础数据',
            'userTerminalInfo'=>'当前设备信息',
            'userTerminalData'=>'当前用户信息',
            'userTerminalIp'=>'当前设备IP信息',
        ];
    }
    /**
     * [userSeesion 获取用户基础api]
     * @return [type] [description]
     */
    public function userSeesion()
    {
        //获取用户数据
        return Result($this->UserData);
    }
    /**
     * [userTerminalInfo 获取用户访问设备部分数据]
     * @return [type] [description]
     */
    public function userTerminalInfo()
    {
        return Result([TerminalInfo::getArowserPro('arr')]);
        
    }
    /**
     * [userTerminalIp 当前ip信息]
     * @return [type] [description]
     */
    public function userTerminalIp()
    {
        return Result(TerminalInfo::getIp());

        
    }
    /**
     * [userTerminalData 当前用户信息]
     * @return [type] [description]
     */
    public function userTerminalData()
    {
        return Result([$this->UserData]);

    }


}
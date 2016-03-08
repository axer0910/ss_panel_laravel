<?php

/**
 * sspanel 配置文件
 * init_transfer：初始注册流量
 *init_plan：初始套餐
 *init_exp_days： 注册免费试用天数
 * init_validate_email:是否验证邮箱 1为需要 -1为不需要
 */

$gb = 1024*1024*1024;


return [

    'init_transfer' =>  3*$gb,
    'init_plan' => 'ss_trail',
    'init_exp_days'=> 3,
    'init_validate_email' => 1

];
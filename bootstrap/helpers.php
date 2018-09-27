<?php
/**
 * Created by PhpStorm.
 * User: zero
 * Date: 2018/9/27
 * Time: 下午4:14
 */

/*
 * 将当前请求的路由名称转换为 CSS 类名
 * 针对某个页面做页面样式定制
 *
 * */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
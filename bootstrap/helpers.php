<?php
/**
 * Created by PhpStorm.
 * User: yanjianyong
 * Date: 2018-12-22
 * Time: 19:10
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

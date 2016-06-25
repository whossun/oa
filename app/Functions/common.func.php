<?php

if (!function_exists('cur_nav')) {
    /**
     * 根据路由$route处理当前导航URL，用于匹配导航高亮
     * $route当前必须满足 二段以上点分 诸如 route('user.index').
     *
     * @param string $route 点分式路由别名
     *
     * @return string 返回经过处理之后路径
     */
    function cur_nav($route = '')
    {
        //explode切分法
        $routeArray = explode('.', $route);
        if ((is_array($routeArray)) && (count($routeArray) >= 2)) {
            $route1 = $routeArray[0].'.index';
            $route2 = $routeArray[0];
            if (Route::getRoutes()->hasNamedRoute($route1)) {  //优先判断是否存在尾缀名为'.index'的路由
                return route($route1);
            } else {
                return route($route2);
            }
        } else {
            return route($route);
        }
    }
}

if (!function_exists('P')) {
    /**
     * 格式化打印输出内容，用于调试.
     *
     * @param $var
     */
    function P($var)
    {
        echo '<pre>'.print_r($var, true).'</pre>';
        die;
    }
}

if (!function_exists('buildPermission')) {
    function buildPermission($param, $pid = 0)
    {
        $res = array();
        foreach ($param as $per) {
            if ($per->pid == $pid) {
                $per['id'] = $per->id;
                $per['name'] = $per->name;
                $per['display_name'] = $per->display_name;
                $per['description'] = $per->description;
                $per['child'] = buildPermission($param, $per->id);
                $res[] = $per;
            }
        }

        return $res;
    }
}

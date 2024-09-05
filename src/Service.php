<?php

declare (strict_types=1);

namespace plugin\center;

use think\admin\Plugin;

/**
 * 组件注册服务
 * @class Service
 * @package plugin\center
 */
class Service extends Plugin
{
    /**
     * 定义插件名称
     * @var string
     */
    protected $appName = '应用中心';

    /**
     * 定义插件入口
     * @var string
     */
    protected $appCode = 'plugin-center';

    /**
     * 定义安装包名
     * @var string
     */
    protected $package = 'xiaochao/plugs-center';

    /**
     * 定义插件菜单
     * @return array
     */
    public static function menu(): array
    {
        return [];
    }
}
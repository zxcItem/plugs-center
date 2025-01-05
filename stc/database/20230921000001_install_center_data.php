<?php

use think\admin\extend\PhinxExtend;
use think\migration\Migrator;

@set_time_limit(0);
@ini_set('memory_limit', -1);

class InstallCenterData extends Migrator
{
    /**
     * 创建数据库
     * @throws \Exception
     */
    public function change()
    {
        $this->insertMenu();
    }

    /**
     * 初始化系统菜单
     * @return void
     * @throws \Exception
     */
    private function insertMenu()
    {
        // 初始化菜单数据
        PhinxExtend::write2menu([
            [
                'name' => '插件入口',
                'sort' => '999',
                'node' => "plugin-center/index/index",
            ],
        ], [
            'url|node' => "plugin-center/index/index"
        ]);
    }
}

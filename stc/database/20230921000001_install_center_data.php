<?php

use think\admin\extend\PhinxExtend;
use think\migration\Migrator;

class InstallCenterData extends Migrator
{
    public function change()
    {
        set_time_limit(0);
        @ini_set('memory_limit', -1);
        $this->insertMenu();
    }

    private function insertMenu()
    {
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

<?php

declare (strict_types=1);

use plugin\center\controller\Index;
use think\admin\Library;

Library::$sapp->route->any('layout/<encode>', Index::class . '@layout')->pattern(['encode' => '[\w-]+']);
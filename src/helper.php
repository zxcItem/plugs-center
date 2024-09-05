<?php

declare (strict_types=1);

if (!function_exists('plguri')) {
    /**
     * 生成插件后台 URL 地址
     * @param string $url 路由地址
     * @param array $vars PATH 变量
     * @param boolean|string $suffix 后缀
     * @param boolean|string $domain 域名
     * @return string
     */
    function plguri(string $url = '', array $vars = [], $suffix = true, $domain = false): string
    {
        $encode = encode(sysvar('CurrentPluginCode'));
        return sysuri("layout/{$encode}", [], false) . '#' . url($url, $vars, $suffix, $domain)->build();
    }
}

if (!function_exists('random_bgc')) {
    function random_bgc(?int $idx = null): string
    {
        $colors = ['red', 'blue', 'orig', 'green', 'violet', 'purple', 'brown'];
        $color = is_null($idx) ? $colors[array_rand($colors)] : $colors[$idx % count($colors)];
        return "think-bg-{$color}";
    }
}

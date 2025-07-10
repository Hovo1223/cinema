<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        $setting = DB::table('settings')->where('key', $key)->value('value');
        return $setting ?? $default;
    }
}

if (!function_exists('set_setting')) {
    function set_setting($key, $value)
    {
        DB::table('settings')->updateOrInsert(
            ['key' => $key],
            ['value' => $value]
        );
    }
}

<?php

if (!function_exists('cookiewallAccept')) {
    /**
     * Returns if the user has accepted cookies
     *
     * @return boolean
     */
    function cookiewallAccept()
    {
        return isset($_COOKIE[config('cookiewall.cookie_name')]) && $_COOKIE[config('cookiewall.cookie_name')];
    }
}

<?php

if (! function_exists('dashboard_rtl')) {
    /**
     * Return css class for rtl and ltr
     *
     * @param string $rtl
     * @param string $ltr
     * @return string
     */
    function dashboard_rtl(string $rtl, string $ltr)
    {
        return config('app.dir') == 'rtl' ? $rtl : $ltr;
    }
}

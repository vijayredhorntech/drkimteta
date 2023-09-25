<?php
function isActiveRoute($route, $output = "border-b-[2px]")
{
    if (\Illuminate\Support\Facades\Route::currentRouteName() == $route) return $output;
}

?>
